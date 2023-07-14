<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>GPKP@OneTouch</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
             <link rel="icon" type="image/png" sizes="16x16" href="../images/logogpk.png">

    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="css2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css2/css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
  <div class="preloader">
            <!-- Main wrapper - style you can find in pages.scss -->
 <div class="loader_bg">
      <div class="loader"><img src="images/load.gif" alt="#" /></div>
   </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div class="Navbar-Gpk">
        <div class="logo">
            <a href="#">  
            <img class="logo-img" src="images/img1.jpg" height="90px" width="80px"  alt="">
            </a>
                <!-- GPK<span> oneTouch</span> -->

            </div>
            <div class="navbar">
    <!-- <a href="#" >Home</a>
    <a href="about1.html">About</a>
    <a href="contact1.html">Contact Us</a> -->
                </div>
            
            <div class="icons">
                <i class="fa fa-bars" id="menu-btn" class="menu-btn" ></i>
<!-- <i class=" fa fa-user-circle" id="search" onclick="inputopen()"></i> -->
<nav class="navbar">
  <form class="form-inline" method="post" >
    <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    <button class="btn btn-danger" type="submit" name="logoutadmin" style="margin-left: 20px;">Logout</button>

  </form>
  <?php 
  if(isset($_POST["logoutadmin"]))
{
    // header('Location: home.php');
    ?>
     <script>
    swal({
                 title: "Are you sure?",
                 text: "You want to logout?",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             }).then((willDelete) => {
                 if (willDelete) {
                    <?php 
    session_destroy();
                    ?>
                     window.location = "../home.php";
                 } else {
                     
                 }
             });
    </script>
    <?php
}
  ?>

</nav>
                <!-- <input type="text" class="search"  placeholder="Search...."> -->
                <!-- <div class="search-bar">
                    <div class="iconified">
                    <i class="searching fas fa-search" ></i>
                    </div>
                    <div class="inputSearch">
                        <input type="text" placeholder="Search..." id="SearchTxt"/>
                    </div>
                </div> -->
<!-- <i class=" fa fa-user-circle" id="search" onclick="inputopen()"></i> -->
<script>
    let search=document.querySelector(".searching");
    search.onclick=function(){
        document.querySelector(".search-bar").classList.toggle('active');
    }
    </script>
            </div>
<!-- <button type="button" class="btn btn-danger logout" style="height:40px; ">Danger</button> -->

</div>

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6" style="height: auto;">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item pt-2  Selected ">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link " href="MainPage.php"
                                aria-expanded="false" >
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu" >Dashboard</span>
                            </a>
                        </li>
                       
                        <li class="sidebar-item Selected">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="allQuestions.php"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu"> Questions</span>
                            </a>
                        </li>
                        <li class="sidebar-item Selected ">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="addletterformat.php"
                                aria-expanded="false">
                                <i class="fa fa-font Aside-Content" aria-hidden="true"></i>
                                <span class="hide-menu"> Letter Formats</span>
                            </a>
                        </li>
                     
                        <li class="sidebar-item Selected select">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Notifications</span>
                            </a>
                        </li>
                   
                      
                    </ul>
                </nav>
            </div>
        </aside>  
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="min-height: 250px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Notifications</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" style="width:150%;">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                            
                           
                                        <div class="col-md-12 col-lg-8 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-body">
                                <center><h3 class="Heading-Q" >Status of all Questions</h3></center>
                                <hr>
                            </div>
                            <?php 
                  include "db_conn.php";
                  $sql = "select id,Question,Answer,DATE_FORMAT(Time,'%d %M %Y') as Time from askquestion order by Time DESC;";
                  $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) == 0) {
?>
<center><h1>
<?php echo "No Questions asked ...";?>
</center></h1>
<?php
                    }
                  while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="comment-widgets">
                                <!-- Comment Row -->
                                 <?php if($row['Answer']==""){?>
                              <a href="mainpage.php">
                              <?php }?>
                                <div class="d-flex flex-row comment-row p-3">
                                    <div class="p-2"><img src="plugins/images/users/ab.png" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text ps-2 ps-md-3 w-100">
                                        <h5 class="font-medium">   <?php echo "{$row['Question']}";?></h5>
                                        <span class="mb-3 d-block">  <?php echo "{$row['Answer']}";?> </span>
                     <div class="disp-flex"> 
                                            <!--  <i onclick="myFunctionl(this)" class="fa fa-thumbs-up"></i><p></p>
                                             <i onclick="myFunctiondl(this)"class="fa fa-thumbs-down"></i><p></p> -->
                    </div>
 <div class="comment-footer d-md-flex align-items-center">
                                            <?php if($row['Answer']==""){?>
                                             <span class="badge bg-primary rounded">Pending</span>
                                             <?php }if ($row['Answer']!==""){ 
                                            
                                            ?>
                                            <?php //echo "{$row['Answer']}"; ?>
                                             <span class="badge bg-success rounded">Answered</span>
                    
<?php }?>
                                            <div class="text-muted fs-2 ms-auto mt-2 mt-md-0"> 
                                                <?php  echo "{$row['Time']}"; ?>
                                            </div>
                                        </div>
                                         <div class="comment-footer d-md-flex align-items-center">
                                             <!-- <span class="badge bg-primary rounded">Pending</span> -->
                                             
                                           
                                        </div>
                                 <?php if($row['Answer']==""){?>

                                    </a>
                                 <?php }?>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                       <!--  <center>
                              <a href="ViewAllQuestions.php"  target="_blank"> <button id="view-btn">View More..</button>
                                  </a>               </center> -->
                               
                        </div>
                    </div>
                  

                                        
                                        <!-- <textarea  ></textarea> -->

                                             <!-- <span class="badge bg-primary rounded">Pending</span> -->
                                           
                                  <!-- <div class="extra"> dhjksd</div> -->
                                 <!--  <center>
                              <a href="ViewAllQuestions.php" target="_blank"> <button id="view-btn">View More..</button>
                                  </a>               </center> -->
                               
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!--   <footer class="footer text-center"> © 2022 All Rights Reserved.
            </footer> -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
<!-- 
    <footer>
      <div class="footer" style="padding:0; margin:0; bottom:0;">
         
         <div class="foot-my">
             <div class="text-light">
             © 2022 All Rights Reserved.Designed and Developed by Department of Information Technology
             </div>
         </div>
         
      </div>
   </footer> -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>