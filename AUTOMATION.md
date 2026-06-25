# OpenAPI Automation

This package is generated from the official Yandex Market Partner API OpenAPI repository:

- Upstream: https://github.com/yandex-market/yandex-market-partner-api
- Spec path: `openapi/openapi.yaml`
- Generator: `php`
- OpenAPI Generator version: pinned in `openapitools.json`

## Local Regeneration

```bash
npm install
npm run generate
composer install
npm run validate
```

`scripts/generate.sh` clones the upstream OpenAPI repository, regenerates the PHP client, applies package-specific metadata fixes, and writes `UPSTREAM_OPENAPI.lock`.

To regenerate from a non-default upstream ref:

```bash
UPSTREAM_REF=<branch-or-commit> npm run generate
```

## CI Flow

- `CI` runs on pushes and pull requests.
- It validates Composer metadata, installs dependencies, checks PHP syntax, loads generated classes at runtime, and runs PHPUnit on PHP 7.4 and 8.1.
- `Update OpenAPI Client` runs on a schedule and can also be started manually. It regenerates the client and opens a pull request only when the generated files changed.
- `Release` runs for semver-like tags and creates a GitHub Release after package validation passes.

## Release Policy

1. Review and merge the automated regeneration pull request.
2. Create a semantic version tag, for example `1.1.5`.
3. Push the tag.
4. The release workflow validates the package and creates a GitHub Release.

Packagist should be configured to consume repository tags. No Packagist token is required in this repository when the GitHub webhook is configured in Packagist.

## PHP Compatibility Contract

The package declares `^7.4|^8.1` support. Every generated update must pass syntax validation, runtime class loading, and PHPUnit under PHP 7.4. If a future OpenAPI Generator release starts emitting PHP 8-only syntax or signatures, do not patch generated files manually. Add a generator template override or postprocess rule and keep the rule in this repository.
