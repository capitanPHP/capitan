<?php
namespace main\http\controllers;
use capitan\View;
use capitan\Request;
use capitan\File;
use capitan\Debug;
use capitan\route\Param;
class index extends Controller 
{
    public function index()
    {
        return 'Hello, World!';
    }
}