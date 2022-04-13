<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92f7268b5d43943a358a31cb79399444
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HelloWorld\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HelloWorld\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92f7268b5d43943a358a31cb79399444::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92f7268b5d43943a358a31cb79399444::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92f7268b5d43943a358a31cb79399444::$classMap;

        }, null, ClassLoader::class);
    }
}
