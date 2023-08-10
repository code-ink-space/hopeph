<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf2855c254b36ae9cbf3eff1f1a524ed6
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

        spl_autoload_register(array('ComposerAutoloaderInitf2855c254b36ae9cbf3eff1f1a524ed6', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf2855c254b36ae9cbf3eff1f1a524ed6', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf2855c254b36ae9cbf3eff1f1a524ed6::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitf2855c254b36ae9cbf3eff1f1a524ed6::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequiref2855c254b36ae9cbf3eff1f1a524ed6($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequiref2855c254b36ae9cbf3eff1f1a524ed6($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
