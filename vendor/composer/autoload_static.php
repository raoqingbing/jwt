<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4aa19c3d6d306f4b504499193d06bf63
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Raoqingbing\\JWT\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Raoqingbing\\JWT\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4aa19c3d6d306f4b504499193d06bf63::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4aa19c3d6d306f4b504499193d06bf63::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4aa19c3d6d306f4b504499193d06bf63::$classMap;

        }, null, ClassLoader::class);
    }
}
