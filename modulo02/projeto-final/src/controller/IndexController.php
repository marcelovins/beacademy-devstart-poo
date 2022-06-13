<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController 
{
    public function indexAction() : void
    {
        // echo dirname(__DIR__);
        include dirname(__DIR__).'/view/index/index.php';
    }
    public function loginAction() : void
    {
        // echo dirname(__DIR__);
        include dirname(__DIR__).'/view/index/login.php';
    }
}