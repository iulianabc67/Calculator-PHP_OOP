<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit047984639558f09219167db0d907f058
{
    public static $classMap = array (
        'Calc' => __DIR__ . '/../..' . '/classes/calc.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit047984639558f09219167db0d907f058::$classMap;

        }, null, ClassLoader::class);
    }
}
