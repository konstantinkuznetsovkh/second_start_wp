<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd231c6bae7d7829d8d415a009309d086
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lazy_coder\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lazy_coder\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd231c6bae7d7829d8d415a009309d086::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd231c6bae7d7829d8d415a009309d086::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
