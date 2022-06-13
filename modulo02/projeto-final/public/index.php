<?php

include '../vendor/autoload.php';

use App\controller\IndexController;

$c = new IndexController();
// $c->indexAction();
$c->loginAction();

echo '<br>';


echo 'olá mundo';