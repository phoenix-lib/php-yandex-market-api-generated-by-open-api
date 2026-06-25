#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
PHP_BIN="${PHP_BIN:-php}"

"$PHP_BIN" -r 'if (PHP_VERSION_ID < 70400) { fwrite(STDERR, "PHP 7.4 or newer is required for validation.\n"); exit(1); }'

STATUS=0

while IFS= read -r -d '' FILE; do
  if ! OUTPUT="$("$PHP_BIN" -l "$FILE" 2>&1)"; then
    echo "$OUTPUT"
    STATUS=1
  fi
done < <(find "$ROOT_DIR/lib" "$ROOT_DIR/test" -type f -name '*.php' -print0)

exit "$STATUS"
