<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c848dd6d6a492a0358b6a6ba3f48e0d
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Labutalib\\BookingComIcsReaderPhp\\' => 33,
        ),
        'E' => 
        array (
            'Example\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Labutalib\\BookingComIcsReaderPhp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Example\\' => 
        array (
            0 => __DIR__ . '/../..' . '/example',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c848dd6d6a492a0358b6a6ba3f48e0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c848dd6d6a492a0358b6a6ba3f48e0d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1c848dd6d6a492a0358b6a6ba3f48e0d::$classMap;

        }, null, ClassLoader::class);
    }
}