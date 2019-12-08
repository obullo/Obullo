<?php

namespace Tests\Pages;

use Obullo\ViewModelTrait;
use Zend\View\Model\ViewModel;
use Zend\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ServerRequestInterface as Request;

class TestModel
{
    use ViewModelTrait;

    public function __construct()
    {
    	$this->viewModel = new ViewModel;
    	$this->viewModel->setTemplate('Test');
    }

    public function onGet(Request $request)
    {
        return new HtmlResponse($this->render($this->viewModel));
    }
}