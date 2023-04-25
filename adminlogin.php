<?php
ob_start();
include "./database/config.php";
include "./login_function.php";
//Loginfun::CheckLoginState($con);
if (Loginfun::CheckLoginState($con)) {
    // echo "welcome to login";
    header("location:" . HTTP_BASE . "admin/index.php");
}
?>
<!--
Author: Abstract Brains
Author URL: http://abstractbrains.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Lowyer Admin</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Abstract Brains" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="<?= HTTP_BASE ?>indexcss/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <link rel="stylesheet" href="<?= HTTP_BASE ?>indexcss/font-awesome.min.css" type="text/css" media="all">

</head>
<!-- =======================================================
  * Developed By : Abstract Brains
  * Licensed By: https://abstractbrains.com
  ======================================================== -->

<body>

    <!-- form section start -->
    <section class="w3l-hotair-form">
        <h1>Admin Login</h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Log In</h2>
                        <form action="<?= HTTP_BASE ?>login_action.php" method="post">
                            <input type="text" class="text" name="username" placeholder="User Name" required="" autofocus>
                            <input type="password" class="password" name="password" placeholder="User Password" required="" autofocus>
                            <button class="btn" name="login" type="submit">Log In</button>
                        </form>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
        <!-- copyright-->
        <div class="copyright text-center">
            <p class="copy-footer-29">© 2022 Dignexus © 2022. All Right Reserved | Developed by <a href="https://dignexus.com">Dignexus</a></p>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->
</body>

</html>