<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit434c840e314658ea613369a8f0bfd13c
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Controllers\\' => 12,
            'Config\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit434c840e314658ea613369a8f0bfd13c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit434c840e314658ea613369a8f0bfd13c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit434c840e314658ea613369a8f0bfd13c::$classMap;

        }, null, ClassLoader::class);
    }
}
