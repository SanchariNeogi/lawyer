<?php
ob_start();
include "./database/config.php";
include "login_function.php";
if(isset($_POST['username']) && isset($_POST['password']))
{
    $username=$con->real_escape_string($_POST['username']);
    $password=$con->real_escape_string($_POST['password']);

    $s1="select * from users_login where (username='$username' || email='$username') and password='$password'";
    $data=mysqli_query($con,$s1);
    $result=mysqli_fetch_assoc($data);
    #echo $result['id'].'sd';
    if($result['id'] > 0)
    {
        //echo "sdfsd";   
        //echo Loginfun::CreateString(30);
        //echo $result['id'];
        if(Loginfun::createRecord($con,$result['id'],$result['username']))
        {
            header("location:".HTTP_BASE.'admin/index.php');
        }
        //Loginfun::createRecord($result['id'],$result['username'],$result['email'] );
        
        //header("location:".HTTP_BASE.'admin/index.php');
    }


}   
/* if(!Loginfun::CheckLoginState($con))
{
    
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username=$con->real_escape_string($_POST['username']);
        $password=$con->real_escape_string($_POST['password']);

        $s1="select * from users_login where (username='$username' || email='$username') and password='$password'";
        $data=mysqli_query($con,$s1);
        $result=mysqli_fetch_assoc($data);
       #echo $result['id'].'sd';
        if($result['id'] > 0)
        {
            //echo "sdfsd";   
            //echo Loginfun::CreateString(30);
            //echo $result['id'];
            Loginfun::createRecord($con,$result['id'],$result['username']);
            //Loginfun::createRecord($result['id'],$result['username'],$result['email'] );
           
            //header("location:".HTTP_BASE.'admin/index.php');
        }


    }
    else{
        //echo "sf";
        //header("location:".HTTP_BASE.'adminlogin.php');
    }
}
else{
    
    
    //header("location:".HTTP_BASE.'admin/index.php');
}
*/
?>