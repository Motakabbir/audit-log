<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd40c51e59d4c909ac2420a583ed74355
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

        spl_autoload_register(array('ComposerAutoloaderInitd40c51e59d4c909ac2420a583ed74355', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd40c51e59d4c909ac2420a583ed74355', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd40c51e59d4c909ac2420a583ed74355::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
