<?php
ob_start();
include "../database/config.php";
if(isset($_POST['save']))
{
    $blog_name=$_POST['blog_name'];
    $blog_headding=$_POST['blog_headding'];
   // $blog_img=$_POST['blog_img'];
    $blog_desc=$_POST['blog_desc'];

   $ins="insert into blogs(blog_name,blog_headding,post_date,status,blog_desc)values('$blog_name','$blog_headding',now(),'1','$blog_desc')";
   $iid=mysqli_query($con,$ins);
    $table_id=mysqli_insert_id($con);
    if($table_id)
    {
        if(isset($_FILES['blog_img']))
        {

            $targetDir = "../blogs/"; 
            $allowTypes = array('jpg','png','jpeg','gif');
            $sourse_fileName = basename($_FILES['blog_img']['tmp_name']); 
            
            $ext = pathinfo($_FILES['blog_img']['name'], PATHINFO_EXTENSION);
            $fileName= "blog_".$table_id.'.'.$ext; 
            
                        
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 

            if(in_array($fileType, $allowTypes)){ 

                if(move_uploaded_file($_FILES["blog_img"]["tmp_name"], $targetFilePath)){ 
                    // Image db insert sql 
                    
                    $up="update blogs set images='$fileName' where id='$table_id'";
                    mysqli_query($con,$up);

                }else
                { 
                   // $errorUpload .= $_FILES['upload_img']['name'][$key].' | '; 
                }
            }

        }
        $_SESSION['errormsg']="Leads Added Successfully";
       // echo $_SESSION['errormsg'];
       header("location:manage_blogs.php");
    }

}
?>

