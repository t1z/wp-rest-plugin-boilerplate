<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbcf2e694b676cc8c27afb83c029774a
{
    public static $prefixesPsr0 = array (
        'b' => 
        array (
            'bhubr' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitfbcf2e694b676cc8c27afb83c029774a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
