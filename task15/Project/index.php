<?php 
define("BASE_PATH",__DIR__.DIRECTORY_SEPARATOR);
define("BASE_URL","http://localhost:8000/");
require_once(BASE_PATH.'data/connection.php');
require_once(BASE_PATH.'core/database.php');
//Routing 

$routes =
[
    "home",
    "about",
    "posts",
    "contact",
    "post",
];

if(isset($_GET['page']))
{
    $page = $_GET['page'];
    if(in_array($page,$routes))
{
    require_once BASE_PATH.'controllers/'.$page.".controller.php";
}
else
{
    require_once 'views/404.php';
}
}
else
{
    require_once BASE_PATH.'controllers/home.controller.php';
}