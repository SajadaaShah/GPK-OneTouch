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
    <title>Gpk@OneTouch</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
     <link rel="icon" type="image/png" sizes="16x16" href="images/logogpk.png">

    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css2/css/style1.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/scrollToTop.js"></script>

</head>
<body>
     <div id="progress">
      <span id="progress-value">&#x1F815;</span>
    </div>
   <?php session_start();?>
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
      
       
        <div class="Navbar-Gpk">
        <div class="logo">
            <a href="#">  
            <img class="logo-img" src="images/img2.jpg" height="90px" width="80px"  alt="">
            </a>
                <!-- GPK<span> oneTouch</span> -->

            </div>
               
            
            
        <div class="icons">
            <i class="fa fa-bars" id="menu-btn" class="menu-btn" onclick="Disnavx()" ></i>
<!-- <i class=" fa fa-user-circle" id="search" onclick="inputopen()"></i> -->

            <nav class="navbar">

            <form class="form-inline" method="post" >
               <!--  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                <button class="btn btn-danger" type="submit" name="logoutuser" style="margin-left: 20px;">Logout</button>

            </form>
                <?php 
                if(isset($_POST["logoutuser"]))
                {
                    session_destroy();
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
                            window.location = "home.php";
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

          <aside class="left-sidebar" data-sidebarbg="skin6" style="height: auto;">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item pt-2 select Selected">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link " href="index.php"
                                aria-expanded="false" >
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu" >Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item Selected">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php"
                                aria-expanded="false"  style="">
                                <i class="fa fa-user Aside-Content" aria-hidden="true"></i>
 
                                <span class="hide-menu" >Profile</span>
                            </a>
                        </li>
                        <b></b>
                        <li class="sidebar-item Selected">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="askQuestion.php"
                                aria-expanded="false" style="color:black;">
                                <i class="fa fa-table Aside-Content" aria-hidden="true"></i>
                                <span class="hide-menu">Ask Question</span>
                            </a>
                        </li>
                        <li class="sidebar-item Selected">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="letterformat.php"
                                aria-expanded="false">
                                <i class="fa fa-font Aside-Content" aria-hidden="true"></i>
                                <span class="hide-menu">Letter Formats</span>
                            </a>
                        </li>
                        <li class="sidebar-item Selected">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="ChangePass.php"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Change Password</span>
                            </a>
                        </li>
                        <li class="sidebar-item Selected">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Notifications</span>
                            </a>
                        </li>
                      
                    </ul>
                </nav>
            </div>
        </aside>  
        <!-- ============================================================= -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" >
            <div class="navbar bb text-center" id="navx" >
                <a href="index.php" style="color: red;">Dashboard</a>
                <a href="profile.php">Profile</a>
                <a href="askQuestion.php">Ask Questions</a>
                <a href="letterformat.php">Letter Formats</a>
                <a href="ChangePass.php">Change Password</a>
                <a href="blank.php">Notifications</a>
                <a><form class="" method="post" >
                <button type="submit" name="logoutuser" style="margin-left: 13x;">Logout</button></form></a>
            </div> 
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard
                        </h4>
                         
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                              <!--   <li><a href="#" class="fw-normal">Dashboard</a></li> -->
                            </ol>
                            <a href="#" class="btn btn-danger Welcome-Button d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white " 
                            >Welcome 
<?php 
include "db_conn.php";
$name=$_SESSION['student_user'];
$sql2="select Name from student where username='$name'";   
$result=mysqli_query($conn,$sql2);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo $row["Name"];
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>
                           
                     !</a>
                           <!--  href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                -->
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
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Questions</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-success">15</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Page Views</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash2"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-purple">68</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-info">15</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- PRODUCTS YEARLY SALES -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- RECENT SALES -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- Recent Comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="">
                        <div class="card white-box p-0">
                            <div class="card-body">
                                <center><h3 class="box-title mb-0">Recently Asked Questions</h3></center>
                                <hr>
                            </div>
                            <div class="comment-widgets">
                                <!-- Comment Row -->
                           
       <?php 
                  include "db_conn.php";
                  $sql = "select id,Question,Answer,DATE_FORMAT(Time,'%d %M %Y') as Time  from Qna  limit 10";
                  $result = mysqli_query($conn, $sql);
                  $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
                    foreach ($rows as $row): 
                  // while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <div class="d-flex flex-row comment-row p-3">
                                    <div class="p-2"><img src="plugins/images/users/ab.png" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text ps-2 ps-md-3 w-100">
                                        <h5 class="font-medium"> <?php echo $row['Question'];?></h5>
                                        <span class="mb-3 d-block"> <?php echo $row['Answer'];?> </span>
                                        <div class="disp-flex"> 
                                             
                                                <i  <?php if(userLiked($row['id'])):?> class="fa fa-thumbs-up like-btn" 
                                                <?php else: ?> class="fa-fa-thumbs-o-up like-btn"
                                        <?php endif ?> data-id="<?php echo $row['id'];?>"
                                              ></i> 
                                          <!--  <button class="btn">
                                             <i onclick="myFunctionl(this)" style="margin-right: 10px;" class="fa fa-thumbs-up"></i><p></p>
                                           </button>
                                           <button class="btn">
                                             <i onclick="myFunctionl(this)" class="fa fa-thumbs-down"></i><p></p>
                                           </button> -->
                                            
                    </div>
                                         <div class="comment-footer d-md-flex align-items-center">
                                             <!-- <span class="badge bg-primary rounded">Pending</span> -->
                                             
                                            <div class="text-muted fs-2 ms-auto mt-2 mt-md-0"> 
                                                <?php  echo $row['Time']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <?php endforeach ;  ?>
                                  <!-- <div class="extra"> dhjksd</div> -->
                                  <center>
                              <a href="ViewAllQuestions.php"> <button id="view-btn">View More..</button>
                                  </a>               </center>
                               
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <?php 
                // echo $sname;
include "db_conn.php";
            function userLiked($post_id)
            {

               // $user_id=$_SESSION['student_user'];
               $user_id="sarvesh123305@gmail.com";
               echo $post_id;
                // $sqlstatement="select * from qna  where user='$user_id' and id=$post_id and rating='like'";
               // $resultstatement=mysqli_query($conn,$sqlstatement);
                // if(mysqli_num_rows($resultstatement)>0)
                //     return true;
                // else 
                //     return false;
            }
            ?>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
          
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    
       <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class=" col-md-4">
                  <h3>Contact US</h3>
                  <ul class="conta">
                     <li><i class="fa fa-map-marker" aria-hidden="true"></i>Government Polytechnic, Kolhapur (An
                        Autonomous Institute of Government of Maharashtra)
                        University Road, Vidyanagar, Kolhapur – 416004 (Maharashtra) India.</li>
                     <li><i class="fa fa-mobile-phone" aria-hidden="true"></i> 0231 – 2521038</li>
                     <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> gpkolhapur@yahoo.com</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <h3>Find Your Way</h3>
                  <ul class="link_menu">
                     <li><a href="http://localhost/GpkOneTouchsam/userLogin/home.php"><i class="fa fa-chevron-right" aria-hidden="true"></i> Home</a></li>
                     <li><a href="http://localhost/GpkOneTouchsam/userLogin/about.html"><i class="fa fa-chevron-right" aria-hidden="true"></i>  About</a></li>
                     
                     <li><a href="http://localhost/GpkOneTouchsam/userLogin/contact.html"><i class="fa fa-chevron-right" aria-hidden="true"></i>  Contact Us</a></li>
                  </ul>
               </div>
                 <div class="col-md-2">
                  <h3>Quick Link</h3>
                  <ul class="link_menu">
                     <li ><a target="_blank" href="https://www.aicte-india.org/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> AICTE</a></li>
                     <li><a target="_blank" href="https://dte.maharashtra.gov.in/"><i class="fa fa-angle-double-right" aria-hidden="true"></i>  DTE</a></li>
                     <li ><a target="_blank" href="https://msbte.org.in/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> MSBTE</a></li>
                     <li ><a target="_blank" href="https://aaplesarkar.maharashtra.gov.in/en/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Aaple Sarkar</a></li>
                     <li ><a target="_blank" href="https://mahadbtmahait.gov.in/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> MAHA DBT</a></li>
                     <li ><a target="_blank" href="https://www.gpkolhapur.org.in/gpkwebnew/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> GPKolhapur</a></li>
                
               </div>
               <div class="col-md-3">
                  <form class="bottom_form">
                  </form>
                  <ul class="social_icon">
                     <li><a href="https://www.facebook.com/GovernmentPolyKolhapur/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a href="https://www.youtube.com/channel/UC5PBrIosSgHqwhCJNPfTvIA"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     <li><a href="https://www.instagram.com/govtpolytechnickolhapur/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                 
                  </ul>

               </div>
               
            </div>
         </div>
         <div class="foot-my">
             <div class="text-light">
             © 2022 All Rights Reserved.Designed and Developed by Department of Information Technology
             </div>
            
         </div>
        
      </div>
   </footer>

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
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>

    <script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
// let navbar = document.querySelector('.navbar');

// document.querySelector('#menu-btn').onclick = () =>{
//     navbar.classList.toggle('active');}
    
</script>

</body>

</html>