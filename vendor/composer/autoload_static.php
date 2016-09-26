<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa243344f42b6eeb011c7c031e4f75cf
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Torounit\\FCQ\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Torounit\\FCQ\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa243344f42b6eeb011c7c031e4f75cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa243344f42b6eeb011c7c031e4f75cf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}