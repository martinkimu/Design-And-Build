<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit429d5177a45b96b7aaf635e974714ccd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Marto\\Classes\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Marto\\Classes\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit429d5177a45b96b7aaf635e974714ccd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit429d5177a45b96b7aaf635e974714ccd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit429d5177a45b96b7aaf635e974714ccd::$classMap;

        }, null, ClassLoader::class);
    }
}
