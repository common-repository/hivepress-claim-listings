<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit10db83db1db7c1ef24833b47b2bcbdfa
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

        spl_autoload_register(array('ComposerAutoloaderInit10db83db1db7c1ef24833b47b2bcbdfa', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit10db83db1db7c1ef24833b47b2bcbdfa', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit10db83db1db7c1ef24833b47b2bcbdfa::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
