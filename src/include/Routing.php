<?php

namespace cms_less\include;

class Routing{

    private $route_map = [];

    function __construct($route_map = []) {
        $this->route_map = $route_map;
    }

    function register_link($link,$callback){
        $this->route_map = array_append_deep($this->route_map,explode("/",$link),$callback);
    }

    function route(){

        $url = $_SERVER['REQUEST_URI'];

        $url_parts = explode("/",$url);

        $callback = array_get_deep($this->route_map,$url_parts);

        if($callback){
            $callback();
        }
    }

}