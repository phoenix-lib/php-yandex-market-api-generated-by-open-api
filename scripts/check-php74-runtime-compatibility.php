<?php

declare(strict_types=1);

$rootDir = dirname(__DIR__);
$autoloadPath = $rootDir . '/vendor/autoload.php';
$libDir = $rootDir . '/lib';

if (!file_exists($autoloadPath)) {
    fwrite(STDERR, "vendor/autoload.php is missing; run composer install first.\n");
    exit(1);
}

require $autoloadPath;

if (!is_dir($libDir)) {
    fwrite(STDERR, "lib directory is missing.\n");
    exit(1);
}

$files = [];
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($libDir, FilesystemIterator::SKIP_DOTS)
);

foreach ($iterator as $file) {
    if (!$file->isFile() || $file->getExtension() !== 'php') {
        continue;
    }

    $files[] = $file->getPathname();
}

sort($files);

$loaded = 0;

foreach ($files as $file) {
    $relativePath = substr($file, strlen($libDir) + 1);
    $classSuffix = substr($relativePath, 0, -4);
    $class = 'OpenAPI\\Client\\' . str_replace(DIRECTORY_SEPARATOR, '\\', $classSuffix);

    if (!class_exists($class) && !interface_exists($class) && !trait_exists($class)) {
        fwrite(STDERR, sprintf("Unable to autoload %s from %s\n", $class, $relativePath));
        exit(1);
    }

    $loaded++;
}

printf("Runtime compatibility check on PHP %s loaded %d generated classes.\n", PHP_VERSION, $loaded);
