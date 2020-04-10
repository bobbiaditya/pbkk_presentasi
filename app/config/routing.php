<?php

use Phalcon\Mvc\Router;

$router = new Router();

$router->add(
    '/',
    [
        'controller' => 'Index',
        // 'action'     => 'sayHallo',
    ]
);

// $router->add(
//     '/invoices/list/{page}/{perPage}',
//     [
//         'controller' => 'Invoices',
//         'action'     => 'list',
//     ]
// );

// $router->add(
//     '/invoices/view/{invoiceId}/{filter}',
//     [
//         'controller' => 'Invoices',
//         'action'     => 'view',
//     ]
// );

return $router;