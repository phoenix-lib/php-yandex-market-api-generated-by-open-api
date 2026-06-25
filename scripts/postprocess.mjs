import fs from 'node:fs'
import path from 'node:path'
import { fileURLToPath } from 'node:url'

const rootDir = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '..')
const composerPath = path.join(rootDir, 'composer.json')
const readmePath = path.join(rootDir, 'README.md')
const staleGeneratedFiles = ['.travis.yml', 'git_push.sh']

for (const file of staleGeneratedFiles) {
  const stalePath = path.join(rootDir, file)

  if (fs.existsSync(stalePath)) {
    fs.rmSync(stalePath)
  }
}

const composer = JSON.parse(fs.readFileSync(composerPath, 'utf8'))

composer.name = 'phoenix-lib/php-yandex-market-api-generated-by-open-api'
composer.description = 'Generated PHP client for Yandex Market Partner API.'
composer.homepage = 'https://github.com/phoenix-lib/php-yandex-market-api-generated-by-open-api'
composer.license = 'Unlicense'
delete composer.version
composer.require = {
  php: '^7.4|^8.1',
  'ext-curl': '*',
  'ext-json': '*',
  'ext-mbstring': '*',
  'guzzlehttp/guzzle': '^7.3',
  'guzzlehttp/psr7': '^1.7 || ^2.0'
}
composer['require-dev'] = {
  'phpunit/phpunit': '^8.0 || ^9.0',
  'friendsofphp/php-cs-fixer': '^3.5'
}
composer.autoload = {
  'psr-4': {
    'OpenAPI\\Client\\': 'lib/'
  }
}
composer['autoload-dev'] = {
  'psr-4': {
    'OpenAPI\\Client\\Test\\': 'test/'
  }
}

fs.writeFileSync(composerPath, `${JSON.stringify(composer, null, 4)}\n`)

if (fs.existsSync(readmePath)) {
  let readme = fs.readFileSync(readmePath, 'utf8')

  readme = readme
    .replace(/^# OpenAPIClient-php/m, '# PHP Yandex Market Partner API Client')
    .replace('PHP 8.1 and later.', 'PHP 7.4, PHP 8.1 and later.')
    .replaceAll('GIT_USER_ID/GIT_REPO_ID', 'phoenix-lib/php-yandex-market-api-generated-by-open-api')
    .replaceAll(
      'https://github.com/GIT_USER_ID/GIT_REPO_ID.git',
      'https://github.com/phoenix-lib/php-yandex-market-api-generated-by-open-api.git'
    )
    .replaceAll('/path/to/OpenAPIClient-php', '/path/to/php-yandex-market-api-generated-by-open-api')

  fs.writeFileSync(readmePath, readme)
}
