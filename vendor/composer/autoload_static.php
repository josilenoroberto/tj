<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2f2f0d9065b0322303d716a25adab3a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2f2f0d9065b0322303d716a25adab3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2f2f0d9065b0322303d716a25adab3a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}