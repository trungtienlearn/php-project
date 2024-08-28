<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite109cb82de262d2c3948e0713ce41cbe
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite109cb82de262d2c3948e0713ce41cbe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite109cb82de262d2c3948e0713ce41cbe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite109cb82de262d2c3948e0713ce41cbe::$classMap;

        }, null, ClassLoader::class);
    }
}
