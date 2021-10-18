<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6545cb27df16a56dc8b6331416e7f93b
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6545cb27df16a56dc8b6331416e7f93b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6545cb27df16a56dc8b6331416e7f93b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6545cb27df16a56dc8b6331416e7f93b::$classMap;

        }, null, ClassLoader::class);
    }
}