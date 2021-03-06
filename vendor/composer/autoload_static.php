<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33bc51f1c8fb5b2d4e93be74bbfefa91
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Imagine\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Imagine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/Imagine',
        ),
    );

    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'Imagine' => 
            array (
                0 => __DIR__ . '/..' . '/imagine/imagine/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33bc51f1c8fb5b2d4e93be74bbfefa91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33bc51f1c8fb5b2d4e93be74bbfefa91::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit33bc51f1c8fb5b2d4e93be74bbfefa91::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
