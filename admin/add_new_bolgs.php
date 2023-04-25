<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Lawyer ::</title>
<?php 
    include "../database/config.php";
    include "../login_function.php";
    require_once '../fckeditor/fckeditor.php';
    include "cssfile.php"; 
    $blog_desc="";
?>
</head>
<body class="font-muli theme-cyan gradient">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>
<div id="main_content">
    <!-- Start Main top header -->
   <?php include "sildebar.php"; ?>
    <!-- Start project content area -->
    <div class="page">
        <!-- Start Page header -->
        <?php include "top.php"; ?>
        <!-- Start Page title and tab -->
        <div class="section-body">
        <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Staff</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">LAWYER</a></li>
                            <li class="breadcrumb-item"><a href="manage_blogs.php">BLOG</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> ADD NEW BOLGS</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <!-- <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Staff-all">List View</a></li> -->
                        <li class="nav-item">
                            <a class="btn btn-warning" href="<?php echo HTTP_BASE_ADMIN.'add_new_bolgs.php'; ?>" ><i class="fe fe-plus mr-2"></i>More</a>
                           
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="Staff-all">
                        <div class="card">
                            <div class="table-responsive">
                            <form action="<?php echo HTTP_BASE_ADMIN.'blogs_action.php'; ?>" id="blogs_form" method="POST" enctype="multipart/form-data">
                            <table class="table table-stripted">
                                <tr>
                                    <td width="20%">Blog's Name</td>
                                <td>:</td>
                                <td><input type="text" name="blog_name" class="form-control form-control-sm"></td>
                             </tr>   
                             <tr>
                                <td>Blogs headding</td>
                                <td>:</td>
                                <td><input type="text" name="blog_headding" class="form-control form-control-sm"></td>
                             </tr>
                             <tr>
                                <td>Blogs Images</td>
                                <td>:</td>
                                <td><input type="file" name="blog_img" class="form-control form-control-sm"></td>
                             </tr>
                             <tr>
                                <td>Desc</td>
                                <td></td>
                                <td>

                                <?php
                                //echo HTTP_BASE."fckeditor/fckconfig.js";
                                    $blog_desc = str_replace("\n", "", $blog_desc);
                                    $blog_desc = str_replace("\r", "", $blog_desc);
                                    $blog_desc = str_replace("'", "\\'", $blog_desc); 
                                    $blog_desc = str_replace('&#62;', ">",  $blog_desc);
                                    $blog_desc = str_replace('&#60;', "<", $blog_desc);   
                                                                                                        
                                    $FCKeditor = new FCKeditor('blog_desc');
                                    $FCKeditor->Config["CustomConfigurationsPath"] = HTTP_BASE."fckeditor/fckconfig.js";
                                    $FCKeditor->BasePath = HTTP_BASE.'fckeditor/';
                                    $FCKeditor->Width = '100%';
                                    $FCKeditor->Height = '500px';
                                    $FCKeditor->Value = $blog_desc;
                                    $FCKeditor->Create();
                                ?>
                                </td>
                             </tr>
                             <tr>
                                <td></td>
                                <td></td>
                                <td><input type="submit" name="save" value="save blog" class="btn btn-primary"></td>
                             </tr>
                        </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start main footer -->
        <div class="section-body">
            <?php include "footer.php"; ?>
        </div>
    </div>    
</div>
<?php include "jsfile.php" ?>
</body>
</html>
