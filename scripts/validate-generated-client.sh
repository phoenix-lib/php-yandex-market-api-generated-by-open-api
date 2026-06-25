#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"

cd "$ROOT_DIR"

composer validate --strict
scripts/validate-php-syntax.sh
php scripts/check-php74-runtime-compatibility.php

if [[ -x vendor/bin/phpunit ]]; then
  vendor/bin/phpunit --colors=never
else
  echo "vendor/bin/phpunit is missing; skipping PHPUnit. Run composer install first to execute tests."
fi
