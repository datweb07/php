<?php

class Router{
    protected $routers = [];

    public function get($url, $action){
        $this -> routers['GET'][$url] = $action;
    }

    public function post($url, $action){
        $this -> routers['POST'][$url] = $action;
    }

    public function getRoute(){
        return $this -> routers;
    }

    public function path($method, $url){
        $url = $url ?: '/';     //nếu url rỗng thì return / 

        if (isset($this -> routers[$method][$url])){
            $action = $this -> routers[$method][$url];
            [$controller, $funcs] = explode('@', $action);

            require_once 'app/Controllers/' . $controller . '.php';
            $controllerIni = new $controller();
            $controllerIni -> $funcs();
        }
        else{
            echo 'lỗi url';
        }
    }
}

?>