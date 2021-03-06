<?php

// autoload_real.php generated by Composer

class ComposerAutoloaderInit3a37d69051b18aef1aadb7c36978f717
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit3a37d69051b18aef1aadb7c36978f717', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit3a37d69051b18aef1aadb7c36978f717', 'loadClassLoader'));

        $vendorDir = dirname(__DIR__);
        $baseDir = dirname(dirname(dirname(dirname(dirname($vendorDir))))).'/zend/apache2/htdocs/testezf';

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        return $loader;
    }
}
