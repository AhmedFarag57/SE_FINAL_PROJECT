<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitecd6acba7a509b9d3ddde9f1b8e16f8e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitecd6acba7a509b9d3ddde9f1b8e16f8e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitecd6acba7a509b9d3ddde9f1b8e16f8e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitecd6acba7a509b9d3ddde9f1b8e16f8e::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitecd6acba7a509b9d3ddde9f1b8e16f8e::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequireecd6acba7a509b9d3ddde9f1b8e16f8e($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequireecd6acba7a509b9d3ddde9f1b8e16f8e($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
