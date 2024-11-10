<?php 

if(check_method('GET'))
{
    $id = $_GET['id']??null;
    if($id)
    {
        delete('posts',$id);

        if(delete('posts',$id))
        {
            set_session('success','post deleted successfully');
        }
    
}
    
}

header('location:'.admin_url('page=posts'));