#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"

UPSTREAM_REPO="${UPSTREAM_REPO:-https://github.com/yandex-market/yandex-market-partner-api.git}"
UPSTREAM_REF="${UPSTREAM_REF:-main}"
UPSTREAM_SPEC_PATH="${UPSTREAM_SPEC_PATH:-openapi/openapi.yaml}"
OPENAPI_GENERATOR_CLI_NPM_VERSION="${OPENAPI_GENERATOR_CLI_NPM_VERSION:-2.39.0}"
WORK_DIR="${WORK_DIR:-${ROOT_DIR}/.build/yandex-market-openapi}"
UPSTREAM_DIR="${WORK_DIR}/upstream"
OPENAPI_GENERATOR_VERSION="$(
  node -e "const fs = require('fs'); const cfg = JSON.parse(fs.readFileSync(process.argv[1], 'utf8')); process.stdout.write(cfg['generator-cli'].version)" "$ROOT_DIR/openapitools.json"
)"

hash_file() {
  if command -v sha256sum >/dev/null 2>&1; then
    sha256sum "$1" | awk '{print $1}'
    return
  fi

  LC_ALL=C LANG=C shasum -a 256 "$1" | awk '{print $1}'
}

require_command() {
  if ! command -v "$1" >/dev/null 2>&1; then
    echo "Required command is missing: $1" >&2
    exit 1
  fi
}

require_command git
require_command node
require_command npm

rm -rf "$WORK_DIR"
mkdir -p "$UPSTREAM_DIR"

git init -q "$UPSTREAM_DIR"
git -C "$UPSTREAM_DIR" remote add origin "$UPSTREAM_REPO"
git -C "$UPSTREAM_DIR" fetch --depth 1 origin "$UPSTREAM_REF"
git -C "$UPSTREAM_DIR" checkout -q --detach FETCH_HEAD

SPEC_FILE="${UPSTREAM_DIR}/${UPSTREAM_SPEC_PATH}"

if [[ ! -f "$SPEC_FILE" ]]; then
  echo "OpenAPI spec was not found: ${UPSTREAM_SPEC_PATH}" >&2
  exit 1
fi

UPSTREAM_COMMIT="$(git -C "$UPSTREAM_DIR" rev-parse HEAD)"
SPEC_SHA256="$(hash_file "$SPEC_FILE")"

rm -rf \
  "$ROOT_DIR/lib" \
  "$ROOT_DIR/docs" \
  "$ROOT_DIR/test" \
  "$ROOT_DIR/.openapi-generator"

rm -f \
  "$ROOT_DIR/.php-cs-fixer.dist.php" \
  "$ROOT_DIR/.travis.yml" \
  "$ROOT_DIR/git_push.sh" \
  "$ROOT_DIR/phpunit.xml.dist" \
  "$ROOT_DIR/README.md"

if [[ -x "$ROOT_DIR/node_modules/.bin/openapi-generator-cli" ]]; then
  GENERATOR=("$ROOT_DIR/node_modules/.bin/openapi-generator-cli")
else
  GENERATOR=(npx --yes "@openapitools/openapi-generator-cli@${OPENAPI_GENERATOR_CLI_NPM_VERSION}")
fi

"${GENERATOR[@]}" generate \
  --config "$ROOT_DIR/openapi-generator-config.yaml" \
  --input-spec "$SPEC_FILE" \
  --generator-name php \
  --output "$ROOT_DIR"

node "$ROOT_DIR/scripts/postprocess.mjs"

cat > "$ROOT_DIR/UPSTREAM_OPENAPI.lock" <<LOCK
repo=${UPSTREAM_REPO}
ref=${UPSTREAM_REF}
commit=${UPSTREAM_COMMIT}
spec=${UPSTREAM_SPEC_PATH}
sha256=${SPEC_SHA256}
generator=php
openapi_generator_version=${OPENAPI_GENERATOR_VERSION}
LOCK

echo "Generated Yandex Market PHP client from ${UPSTREAM_COMMIT} (${SPEC_SHA256})."
