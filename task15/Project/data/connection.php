<?php 

$conn = mysqli_connect("localhost","root","","clean_blog");

    if(!$conn)
    {
        die("connection faild".mysqli_connect_error());
    }
    