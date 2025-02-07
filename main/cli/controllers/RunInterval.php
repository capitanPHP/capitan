<?php
declare(strict_types=1);
namespace main\cli\controllers;
class RunInterval extends Controller
{
    public function __construct()
    {
        
        
    }
    public function task()
    {
        echo __CLASS__ . '\\' . __FUNCTION__ . ': ' . date("Y-m-d H:i:s") . PHP_EOL;
    }
    public function callback()
    {
        echo __CLASS__ . '\\' . __FUNCTION__ . ': ' . date("Y-m-d H:i:s") . PHP_EOL;
    }
}