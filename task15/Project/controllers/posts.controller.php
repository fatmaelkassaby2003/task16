<?php 
require_once(BASE_PATH.'data/connection.php');


$all_data=select_data('posts');

require_once BASE_PATH.'views/posts.views.php';