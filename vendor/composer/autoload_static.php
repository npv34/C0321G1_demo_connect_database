<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ee0a1968f4eb1cad860fe5cd7c614f4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Database\\' => 13,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/database',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ee0a1968f4eb1cad860fe5cd7c614f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ee0a1968f4eb1cad860fe5cd7c614f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ee0a1968f4eb1cad860fe5cd7c614f4::$classMap;

        }, null, ClassLoader::class);
    }
}
