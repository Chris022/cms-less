<?php

namespace cms_less\inc;

class Routing{

    private static $route_map = [];

    static function register_link($link,$file){
        $path = explode("/",$link);

        static::$route_map = static::add_deep(static::$route_map,$path,$file);

        print_r(static::$route_map);
    }

    static function add_deep($array,$path,$element){

        if (count($path) == 1){
            $array[$path[0]] = $element;
            return $array;
        }

        if(!!!array_key_exists($path[0],$array)){
            $array[$path[0]] = static::add_deep([],array_splice($path,1),$element);

            return $array;
        }
        $array[$path[0]] = static::add_deep($array[$path[0]],array_splice($path,1),$element);
        return $array;
    }

}