<?php

namespace cms_less\include;

class Routing{

    static function register_link($route_map,$link,$element){

        $link_head = $link[0];
        $link_tail = array_splice($link,1);

        // Recurstion end-case
        if (count($link) == 1){
            $route_map[$link_head] = $element;
            return $route_map;
        }

        if(!!!array_key_exists($link_head,$route_map)){
            $route_map[$link_head] = static::register_link([],$link_tail,$element);

            return $route_map;
        }
        $route_map[$link_head] = static::register_link($route_map[$link_head],array_splice($path,1),$element);
        return $route_map;
    }

}