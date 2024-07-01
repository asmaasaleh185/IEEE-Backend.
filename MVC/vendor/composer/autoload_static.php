<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd0db06a00f3e0bb0b7e630a5d865ad8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd0db06a00f3e0bb0b7e630a5d865ad8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd0db06a00f3e0bb0b7e630a5d865ad8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd0db06a00f3e0bb0b7e630a5d865ad8::$classMap;

        }, null, ClassLoader::class);
    }
}
