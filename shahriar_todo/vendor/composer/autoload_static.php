<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e9f9601a331c2aa4212910a1c986bb0
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Database' => __DIR__ . '/../..' . '/todoClass/config.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6e9f9601a331c2aa4212910a1c986bb0::$classMap;

        }, null, ClassLoader::class);
    }
}