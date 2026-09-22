<?php
/**
 * PHPUnit Bootstrap for OSSN
 */
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

// Autoload classes manually if composer autoload is not generated yet
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/../classes/' . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});
