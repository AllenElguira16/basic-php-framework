<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd68bd5f46f5f65a6ff9109f546eaa32
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/.framework',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd68bd5f46f5f65a6ff9109f546eaa32::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd68bd5f46f5f65a6ff9109f546eaa32::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdd68bd5f46f5f65a6ff9109f546eaa32::$classMap;

        }, null, ClassLoader::class);
    }
}
