<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Loader;
use Phalcon\Mvc\Application;
use Phalcon\Url;
use Phalcon\Di\DiInterface;
use Phalcon\Mvc\ViewBaseInterface;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;

// Define some absolute path constants to aid in locating resources
define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');

// Register an autoloader
$loader = new Loader();

$loader->registerDirs(
    [
        APP_PATH . '/config/',
        APP_PATH . '/controllers/',
        APP_PATH . '/models/',
        APP_PATH . '/validation/',
        APP_PATH . '/views/',
        APP_PATH . "/cache/",
    ]
);

$loader->register();

$container = new FactoryDefault();

// $container->set(
//     'view',
//     function () {
//         $view = new View();
//         $view->setViewsDir(APP_PATH . '/views/');
//         return $view;
//     }
// );

$container->set(
    'view',
    function () {
        $view = new View();

        $view->setViewsDir(APP_PATH . '/views/');
        $view->registerEngines(
            [
                '.phtml' => function (ViewBaseInterface $view) {
                    $volt = new Volt($view, $this);

                    $volt->setOptions(
                        [
                            'always'    => true,
                            'extension' => '.php',
                            'separator' => '_',
                            'stat'      => true,
                            'path'      => APP_PATH . "/cache/",
                            'prefix'    => '-prefix-',
                        ]
                    );
                    
                    return $volt;
                }
            ]
        );

        return $view;
    }
);

$container->set(
    'url',
    function () {
        $url = new Url();
        $url->setBaseUri('/');
        
        return $url;
    }
);
$container->set(
    'router',
    function () {
        require APP_PATH . '/config/routing.php';

        return $router;
    }
);

$application = new Application($container);

try {
    // Handle the request
    $response = $application->handle(
        $_SERVER["REQUEST_URI"]
    );

    $response->send();
} catch (\Exception $e) {
    echo 'Exception: ', $e->getMessage();
}

