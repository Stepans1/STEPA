<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41220c33994f714d28054f6493bb2d92
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41220c33994f714d28054f6493bb2d92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41220c33994f714d28054f6493bb2d92::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit41220c33994f714d28054f6493bb2d92::$classMap;

        }, null, ClassLoader::class);
    }
}
