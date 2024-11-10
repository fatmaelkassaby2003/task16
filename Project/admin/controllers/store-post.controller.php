<?php 

require_once BASE_PATH."core/validations.php";
$errors = [];

if(check_method("POST")){

    $title = sanitize_input('title');
    $content = sanitize_input('content');

    // name =>  required , string(a-zA-Z0-9 .) , min:3 , max : 200 

   if(required($title)){
        $errors['title'] = "title is required";
   }elseif(minLength($title,10)){
        $errors['title'] = "title must be at least 10 characters long";
   }

   // email => required , email 
   // phone => required , numeric , max:15
   // message => required , string(a-zA-Z0-9 .,!?) , min:10 , max : 1000


   if(empty($errors)){
        // insert data 
        $result = insert('posts',[
            'title' => $title,
            'content' => $content
        ]);

        if($result)
        {
            set_session("success","posts sent successfully");
        }
    }
    else
    {
        set_session("errors",$errors);
    }
    header("Location: ".admin_url("page=add-post"));
    exit();

//    header("Location: ".BASE_URL."index.php?page=contact");
//    exit;

}else{
    
    require_once "views/404.views.php";
}