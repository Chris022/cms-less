<?php

namespace cms_less\include;

class View{

    static function backend($name,$path=""){
        return function()use($name,$path){
            include_once "views/".$path.$name.".php";
        };
    }

}