<?php

namespace App\Pages;

use Obullo\Router\Router;
use Obullo\View\View;
use Laminas\View\Model\ViewModel;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ServerRequestInterface as Request;

class WelcomeModel extends View
{
    public function onGet(Request $request, Router $router)
    {
        return new HtmlResponse('Welcome');
    }
}
