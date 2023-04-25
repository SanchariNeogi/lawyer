<?php
ob_start();
 include "../database/config.php";
 include "../login_function.php";
?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Lawyer ::</title>
<?php 
    include "cssfile.php"; 
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
                            <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Staff</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <!-- <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Staff-all">List View</a></li> -->
                        <li class="nav-item">
                            <a class="btn btn-warning" href="<?php echo HTTP_BASE_ADMIN.'add_new_bolgs.php'; ?>" ><i class="fe fe-plus mr-2"></i>More</a>
                           
                        </li>
                        
                    </ul>
                </div>
                <?php
                
                    if(isset($_SESSION["errormsg"])) {
                        echo $error = $_SESSION["errormsg"];
                        //session_start();
                       // unset($_SESSION["errormsg"]);
                    } else {
                        echo "";
                        $error = "";
                    }
                    
                    //  echo $error;
                    ?>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="Staff-all">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover table-vcenter text-nowrap table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Blogs Name</th>
                                            <th>Blogs Headding</th>
                                            <th>Short Desc</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
										$row = 0;
										$pageid='';
										$where_for_manage_gallery=''; 
										$query_manage_gallery="SELECT * FROM blogs order by id  DESC LIMIT $from, $max_results";
                                        $rec=mysqli_query($con,$query_manage_gallery);
										$numrows = mysqli_num_rows($rec);
										
										$TotallistSQL = mysqli_query($con,"SELECT * FROM blogs") or die(mysqli_error($con));
										$total = mysqli_num_rows($TotallistSQL); 
										
										$total_results = $total;
										$total_pages = ceil($total_results/$max_results);
										$to1 = $from+$max_results;
					

                                        $i=0;
										if($numrows>0)
										{
											
                                            
											while($result_manage_gallery = mysqli_fetch_assoc($rec))
											{
                                                $i++;	
												$pageid = ''; 
                                                $images = $result_manage_gallery['images']; 
                                                $blogs_name = $result_manage_gallery['blog_name']; 
                                                $blogs_headding = $result_manage_gallery['blog_headding']; 
												$manage_gallery_id = $result_manage_gallery['id']; 
												$status   = $result_manage_gallery['status']; 
												$row++;
                                        		if(($row%2)==0){$class="even";}else{$class="odd";}
												
												$get_status = "Inactive";
												if($status == '1')
													$get_status = "Active";
												?>
												<tr class="<?php echo $class ?>">
                                                    <td>
                                                    <img class="avatar" src="../blogs/<?php echo $images; ?>" alt="">
                                                       
                                                    </td>
                                                    <td><?php echo $blogs_name; ?></td>
                                                    <td><?php echo $blogs_headding; ?></td>
                                                    <td></td>
													<td align="center" class="normal_text">
                                                    <span class="tag tag-success"><?php echo $get_status; ?></span></td>
													

													<td class="error_message" align="center">
                                                    <!-- <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button> -->
                                                    <!-- <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>    -->
                                                    <a onclick=" return confirm('Are You Want To delete')" href="admin_delete_manage_blogs.php?manage_blogs_id=<?php echo $manage_gallery_id ; ?>" class="btn btn-icon btn-sm js-sweetalert"><i class="fa fa-trash-o text-danger"></i></a></a>
                                                    </td>
												</tr>
												<?php 
											}	
										}
										else 
										{
											?>
												<tr><td colspan="5" height="40" align="center">No Record Found</td></tr>
											<?php
										}			
										?>
                                        <!-- <tr>
                                            <td class="w60">
                                                <img class="avatar" src="../assets/images/xs/avatar3.jpg" alt="">
                                            </td>
                                            <td><div class="font-15">Ken Smith</div></td>
                                            <td><span>(417) 646-8377</span></td>
                                            <td><span class="text-muted">Peon</span></td>
                                            <td>ken@gmail.com</td>
                                            <td><strong>04 Jan, 2019</strong></td>
                                            <td><span class="tag tag-success">Full-time</span></td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                            </td>
                                        </tr> -->
                                        
                                       
                                    </tbody>
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
<?php include "jsfile.php" ;
ob_flush();
?>
</body>
</html>
