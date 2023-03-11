<?php


/**
 * 
 * Collection of array helper functions
 * 
 * 
 */

if (!!!function_exists('fp_head')) {
    function fp_head($list){
        if(isset($list[0])) return $list[0];
        return null;
    }
}


if (!!!function_exists('fp_tail')) {
    function fp_tail($list){
        return array_slice($list,1);
    }
}