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
}

?>