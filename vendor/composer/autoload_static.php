<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a8e924db2cfc03485bb209fdb756a0a
{
    public static $files = array (
        'b0655c4b47b25ec49f0e931fe41ab7a3' => __DIR__ . '/..' . '/phalapi/kernal/src/bootstrap.php',
        '5cab427b0519bb4ddb2f894b03d1d957' => __DIR__ . '/..' . '/phalapi/kernal/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhalApi\\Qiniu\\' => 14,
            'PhalApi\\NotORM\\' => 15,
            'PhalApi\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhalApi\\Qiniu\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PhalApi\\NotORM\\' => 
        array (
            0 => __DIR__ . '/..' . '/phalapi/notorm/src',
        ),
        'PhalApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/phalapi/kernal/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'Q' => 
        array (
            'Qiniu' => 
            array (
                0 => __DIR__ . '/..' . '/qiniu/qiniu/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a8e924db2cfc03485bb209fdb756a0a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a8e924db2cfc03485bb209fdb756a0a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1a8e924db2cfc03485bb209fdb756a0a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
