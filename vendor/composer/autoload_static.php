<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8cff774f6c0baf793f4c8f7cd05f5ef8
{
    public static $files = array (
        '7b16efdadc5a663ecf7d4ff6aea09f73' => __DIR__ . '/../..' . '/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
            'Api\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
        'Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Api',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8cff774f6c0baf793f4c8f7cd05f5ef8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8cff774f6c0baf793f4c8f7cd05f5ef8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8cff774f6c0baf793f4c8f7cd05f5ef8::$classMap;

        }, null, ClassLoader::class);
    }
}
