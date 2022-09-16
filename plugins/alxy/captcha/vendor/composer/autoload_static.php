<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94370a8724fbb4fcbeff7afb1abedfa9
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94370a8724fbb4fcbeff7afb1abedfa9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94370a8724fbb4fcbeff7afb1abedfa9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit94370a8724fbb4fcbeff7afb1abedfa9::$classMap;

        }, null, ClassLoader::class);
    }
}
