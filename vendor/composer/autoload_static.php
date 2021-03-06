<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9f65e69dd6077ee3817cc24fa758fcd
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Thumper' => 
            array (
                0 => __DIR__ . '/..' . '/php-amqplib/thumper/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9f65e69dd6077ee3817cc24fa758fcd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9f65e69dd6077ee3817cc24fa758fcd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb9f65e69dd6077ee3817cc24fa758fcd::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
