<?php
namespace cms_less;

use cms_less\include\Routing;
use cms_less\include\View;

/**
 * 
 * This File defines all routes for fluffy-disco-cms
 * 
*/

$route_map = new Routing();

$route_map->register_link(
    "/",
    View::backend("login")
);

$route_map->route();
