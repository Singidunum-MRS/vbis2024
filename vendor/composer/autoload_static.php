<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd2e3a67607b53f91a7c454eaf4681c2
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd2e3a67607b53f91a7c454eaf4681c2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd2e3a67607b53f91a7c454eaf4681c2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd2e3a67607b53f91a7c454eaf4681c2::$classMap;

        }, null, ClassLoader::class);
    }
}
