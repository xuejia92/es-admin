<?php

namespace App\HttpController;

use EasySwoole\Core\Http\Request;
use EasySwoole\Core\Http\Response;
use FastRoute\RouteCollector;

class Router extends \EasySwoole\Core\Http\AbstractInterface\Router
{

    function register(RouteCollector $routeCollector)
    {
        // TODO: Implement register() method.
        // /
        $routeCollector->get('/',"Admin/Index/index");
        // /test/index.html
        $routeCollector->get('/test',function (Request $request ,Response $response){
            $response->write('this router test');
            $response->end();
        });
        // /user/1/index.html
        $routeCollector->get( '/user/{id:\d+}',function (Request $request ,Response $response,$id){
            $response->write("this is router user ,your id is {$id}");
            $response->end();
        });

        //传递给 /index控制器 test2方法
        $routeCollector->get( '/user2/{id:\d+}','/test2');

    }
}