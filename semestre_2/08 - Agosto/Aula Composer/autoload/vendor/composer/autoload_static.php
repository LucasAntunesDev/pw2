<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04ed77be78f65fb7d0bf84be4bbac0ab
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04ed77be78f65fb7d0bf84be4bbac0ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04ed77be78f65fb7d0bf84be4bbac0ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04ed77be78f65fb7d0bf84be4bbac0ab::$classMap;

        }, null, ClassLoader::class);
    }
}