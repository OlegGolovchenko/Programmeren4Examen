<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e0fc56447adb03ede59a47d2bae1f0b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'ModernWays\\Mvc\\' => 15,
            'ModernWays\\Dialog\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ModernWays\\Mvc\\' => 
        array (
            0 => __DIR__ . '/..' . '/modernways/mvc/src',
        ),
        'ModernWays\\Dialog\\' => 
        array (
            0 => __DIR__ . '/..' . '/modernways/dialog/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e0fc56447adb03ede59a47d2bae1f0b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e0fc56447adb03ede59a47d2bae1f0b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
