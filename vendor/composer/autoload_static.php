<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbdfa333cc2b1b9bca1284f0bfbb9f515
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\ByteBank\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\ByteBank\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbdfa333cc2b1b9bca1284f0bfbb9f515::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbdfa333cc2b1b9bca1284f0bfbb9f515::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbdfa333cc2b1b9bca1284f0bfbb9f515::$classMap;

        }, null, ClassLoader::class);
    }
}
