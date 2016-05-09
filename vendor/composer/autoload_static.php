<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit747e52268a6def06ace5e9aedcde6100
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        '45e8c92354af155465588409ef796dbc' => __DIR__ . '/../..' . '/lib/base.php',
        '18c49467ca53b9724783956115da353a' => __DIR__ . '/../..' . '/app/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static $classMap = array (
        'AdminController' => __DIR__ . '/../..' . '/app/controller/admin/AdminController.php',
        'AjaxController' => __DIR__ . '/../..' . '/app/controller/AjaxController.php',
        'Boards' => __DIR__ . '/../..' . '/app/models/Boards.php',
        'Category' => __DIR__ . '/../..' . '/app/models/Category.php',
        'Controller' => __DIR__ . '/../..' . '/app/controller/Controller.php',
        'MainController' => __DIR__ . '/../..' . '/app/controller/MainController.php',
        'Photos' => __DIR__ . '/../..' . '/app/models/Photos.php',
        'PostingController' => __DIR__ . '/../..' . '/app/controller/PostingController.php',
        'Posts' => __DIR__ . '/../..' . '/app/models/Posts.php',
        'Threads' => __DIR__ . '/../..' . '/app/models/Threads.php',
        'User' => __DIR__ . '/../..' . '/app/models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit747e52268a6def06ace5e9aedcde6100::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit747e52268a6def06ace5e9aedcde6100::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit747e52268a6def06ace5e9aedcde6100::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit747e52268a6def06ace5e9aedcde6100::$classMap;

        }, null, ClassLoader::class);
    }
}
