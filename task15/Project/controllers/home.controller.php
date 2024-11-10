<?php 
require_once(BASE_PATH.'data/connection.php');


$all_data=select_data('posts',' LIMIT 3');
require_once BASE_PATH.'views/home.views.php';