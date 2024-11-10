<?php

function select_data($table,$limit='')
{
    global $conn;
    $sql = "SELECT * FROM `$table`  $limit";

    $posts =mysqli_query($conn,$sql);
    if($posts)
    {
        return map_data($posts);;
    }
    else
    {   
        return [];
    }
}
function get_row_by_id($table,$id) 
{
    global $conn;
    $sql = "SELECT * FROM `$table`  WHERE id=$id";
    $result =mysqli_query($conn,$sql);
    return mysqli_fetch_assoc($result) ?? [];
}
function map_data($data)
{
    $all_data=[];
    while($row =mysqli_fetch_assoc($data))
    {
        $all_data[]=$row;
    }

    return $all_data;
}
