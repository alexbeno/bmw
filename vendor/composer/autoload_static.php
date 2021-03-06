<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5332d8a044de1c6bcb6923d728f88d13
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5332d8a044de1c6bcb6923d728f88d13::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5332d8a044de1c6bcb6923d728f88d13::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
