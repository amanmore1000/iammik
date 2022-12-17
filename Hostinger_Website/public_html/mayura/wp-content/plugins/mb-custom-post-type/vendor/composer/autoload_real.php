<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd8f25e74871d23c2e0d9f5504ff85a82
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

        spl_autoload_register(array('ComposerAutoloaderInitd8f25e74871d23c2e0d9f5504ff85a82', 'loadClassLoader'), true, false);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd8f25e74871d23c2e0d9f5504ff85a82', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd8f25e74871d23c2e0d9f5504ff85a82::getInitializer($loader));

        $loader->register(false);

        return $loader;
    }
}
