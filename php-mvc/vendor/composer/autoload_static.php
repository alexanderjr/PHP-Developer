<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0438cc4e06c7f4a5ed416c2606e6b652
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SON\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SON\\' => 
        array (
            0 => __DIR__ . '/..' . '/SON',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0438cc4e06c7f4a5ed416c2606e6b652::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0438cc4e06c7f4a5ed416c2606e6b652::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
