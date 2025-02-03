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
        dump(
            main()->getFrameworkDir(),
            main()->getRootDir(),
            main()->getMainDir(),
            main()->getBufferDir(),
            main()->getIniDir(),
            main()->getViewDir()
        );

        return 'Hello, World!';
    }
    public function index2()
    {
        return 'Hello, World! index2';
    }
    public function view()
    {
        $view = new View();
        return $view->render([
            'title' => 'Test View Page',
            'heading' => 'Welcome to My Website',
            'content' => 'This is a simple <b>template engine</b> example.',
            'underline_variable' =>  'Underline variable'
        ]);

        // return $view->render('index/index_index',[
        //     'title' => 'Test View Page',
        //     'heading' => 'Welcome to My Website',
        //     'content' => 'This is a simple template engine example.'
        // ]);

        // return $template->render();
    }
    public function argument()
    {

        dump(Param::get()); // 获取全部参数
        dump(Param::get('sid')); //获取某个key参数的值



        $view = new View();
        return $view->render([
            'title' => 'Test Argument Page',
            'heading' => 'Welcome to My Website Argument Test',
            'content' => 'This is a simple template engine example.'
        ]);
    }
    public function request()
    {
        $request = new Request;
        dump(
            'HOST : '   . $request->getHost(),
            '客户端IP地址 : ' . $request->ip(),
            'isMethod',
            '获取请求方法 : ' . $request->isMethod(),
            '判断请求方法 : ' . $request->isMethod('GET'),
            'Param',
            '获取参数方法 : ', $request->getParam(),
        );

        // dump(Param::get());
        // dump($request->getParam());
    }
    public function file()
    {
        $file = new File(main()->getViewDir() . 'index.tpl');
        dump($file->getMTime());
    }
    public function debug()
    {

        // error([
        //     'message'   =>  '自定义错误！',
        //     'code'  =>  '2'
        // ]);

        // $a = 1 + false + '';
    }
}