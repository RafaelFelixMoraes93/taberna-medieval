<?php
function autoload($className) {
    $directory = __DIR__;
    $fileName = $className . '.php';

    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
    foreach ($iterator as $file) {
        if ($file->getFilename() === $fileName) {
            require_once $file->getPathname();
            return;
        }
    }
}

spl_autoload_register('autoload');