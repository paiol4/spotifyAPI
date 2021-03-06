<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee41b2ca8d9d1013be25cb98a0e0d4e0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SpotifyWebAPI\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SpotifyWebAPI\\' => 
        array (
            0 => __DIR__ . '/..' . '/jwilsson/spotify-web-api-php/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee41b2ca8d9d1013be25cb98a0e0d4e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee41b2ca8d9d1013be25cb98a0e0d4e0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitee41b2ca8d9d1013be25cb98a0e0d4e0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
