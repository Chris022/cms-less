<?php 

//Start by including the autoloader
require "vendor/autoload.php";

use cms_less\inc\Routing;

$route_map = [];

Routing::register_link($route_map,["hello","world"],"world.php");
print_r($route_map);
//Routing::register_link("/hello/chris","chris.php");