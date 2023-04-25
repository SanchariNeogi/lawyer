<?php
include "../database/config.php";
if(isset($_GET['manage_blogs_id']))
{
    $manage_blogs_id=$_GET['manage_blogs_id'];
    
    $sel="select images from blogs where id='$manage_blogs_id'";
    $rec=mysqli_query($con,$sel);
    $data=mysqli_fetch_array($rec);
    $img="../blogs/".$data['images'];
    if(file_exists($img))
    {
        unlink($img);
        
    }   
        $del="delete from blogs where id='$manage_blogs_id'";
        mysqli_query($con,$del);
        header("location:".HTTP_BASE_ADMIN.'manage_blogs.php');
}
?>