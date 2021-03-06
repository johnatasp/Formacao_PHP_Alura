<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf6b108d76d809545791b50f7a681ac8
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf6b108d76d809545791b50f7a681ac8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf6b108d76d809545791b50f7a681ac8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
