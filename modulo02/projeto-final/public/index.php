<?php

include '../vendor/autoload.php';

use App\controller\IndexController;
use App\controller\ProductController;
use App\controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

function createRoute(string $controllerName, string $methodName) {
    return [
        'controller' => $controllerName, 
        'method' => $methodName
    ];
}

$routes = [
    '/' => createRoute(IndexController::class, 'indexAction'),
    '/produtos' => createRoute(ProductController::class, 'listAction'),
    '/produtos/novo' => createRoute(ProductController::class, 'addAction'),
];


if (false === isset($routes[$url])) {
    // $c = new IndexController();
    // $c->indexAction();
    (new ErrorController())->notFoundAction();

    exit;
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();

// var_dump($routes[$url]);

// echo $url;

//se fosse feito com if ficaria enorme!

// if ($url === '/') {
//     $c = new IndexController();
//     $c->indexAction();
// }elseif ($url === '/login') {
//     $c = new IndexController();
//     $c->loginAction();
// }elseif ($url === '/produtos') {
//     $p = new ProductController();
//     $p->listAction();
// }else {
//     $e = new ErrorController();
//     $e->notFoundAction();
// }

// $c = new IndexController();
// $c->indexAction();
// $c->loginAction();

// $p = new ProductController();
// $p->listAction();
// $p->addAction();
// $p->editAction();

echo '<br>';


echo 'olá mundo';