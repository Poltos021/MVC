<?php

namespace system;

class Router {

    private $routers = [];

    public function __construct()
    {
       include 'app/config/routers.php';
    }

    private function addRoute($uri, $controller, $action)
    {
        $req =[
            'controller' => $controller,
            'action' => $action,
        ];

        $this->routers[$uri] = $req;
    }

    public function getRoute()
    {
        # code...
        $phpself = $_SERVER['PHP_SELF'];
        $phpself = substr($phpself, 0, - 9);
        $dir = strlen($phpself);
        $uri = $_SERVER['REQUEST_URI'];
        $uri = substr($uri, $dir);
        $uri = explode('?', $uri);
        $uri = $uri[0];


        $flag = false;
        foreach ($this->routers as $rurl => $route) {
            $preg = '|^' . $rurl .'$|';
            $matches = null;
            if (preg_match($preg, $uri, $matches)) {
                $flag = true;
                break;
            }

        }

        if (!$flag)
        {
            $route = [
                'controller' => 'Index',
                'action' => 'error404'
            ];
        }

        $matches = array_splice($matches, 1);
        $route['params'] = $matches;

        return $route;
    }
}