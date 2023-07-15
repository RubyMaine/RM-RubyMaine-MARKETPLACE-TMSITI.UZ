<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64731c4f4d64f865eea8005d8c509e4c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64731c4f4d64f865eea8005d8c509e4c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64731c4f4d64f865eea8005d8c509e4c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit64731c4f4d64f865eea8005d8c509e4c::$classMap;

        }, null, ClassLoader::class);
    }
}
