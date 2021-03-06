<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4795ecf207fd864db64594704bd162aa
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpParser\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4795ecf207fd864db64594704bd162aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4795ecf207fd864db64594704bd162aa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
