<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e482f0d7a51f4e1fbb6ca58deaac64d
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e482f0d7a51f4e1fbb6ca58deaac64d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e482f0d7a51f4e1fbb6ca58deaac64d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e482f0d7a51f4e1fbb6ca58deaac64d::$classMap;

        }, null, ClassLoader::class);
    }
}
