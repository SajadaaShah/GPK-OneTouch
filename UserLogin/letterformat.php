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
        <link rel="icon" type="image/png" sizes="16x16" href="images/logogpk.png">

    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="css2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css2/css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="js/scrollToTop.js"></script>


</head>

<body>
    <div id="progress">
      <span id="progress-value">&#x1F815;</span>
    </div>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
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
            <img class="logo-img" src="images/img2.jpg" height="90px" width="80px"  alt="">
            </a>
                <!-- GPK<span> oneTouch</span> -->

            </div>
          
            
            <div class="icons">
                <i class="fa fa-bars" id="menu-btn" class="menu-btn"  onclick="Disnavx()"></i>
<!-- <i class=" fa fa-user-circle" id="search" onclick="inputopen()"></i> -->
<nav class="navbar">
  <form class="form-inline" method="post" >
    <button class="btn btn-danger" type="submit" name="logoutuser" style="margin-left: 20px;">Logout</button>
  </form>
  <?php 
  if(isset($_POST["logoutuser"]))
{
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
    <aside class="left-sidebar" data-sidebarbg="skin6" style="height:500px;">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item pt-2  Selected">
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
                        <li class="sidebar-item Selected select">
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
            <br>
        <br>
        <br>
        <br>
    </aside>  


        <div class="page-wrapper">
            <div class="navbar bb text-center" id="navx" >
                <a href="index.php" >Dashboard</a>
                <a href="profile.php">Profile</a>
                <a href="askQuestion.php">Ask Questions</a>
                <a href="letterformat.php" style="color: red;">Letter Formats</a>
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
                        <h4 class="page-title">Letter Formats</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <!-- <li><a href="#" class="fw-normal">Dashboard</a></li> -->
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
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
             <div class="card white-box p-0">
                            <div class="card-body">
                                <center><h3 class="box-title mb-0">Available Letter Formats</h3></center>
                           
                                
 
    
    
 
                            </div>
                            <hr>

                             <div>
                               
                               <div class="row justify-content-center">
    <div class="col-auto">
         <?php 
                                    include "db_conn.php";
                                    $sql="select id,Title,filename,DATE_FORMAT(Time,'%d %M %Y') as Time from letterformats";
                                    $result=mysqli_query($conn,$sql) or die("Unable to execute query");
                                    if(mysqli_num_rows($result)==0)
                                    {
                                        echo "No Letter formats";
                                    }
                                    else{
                                    $files=mysqli_fetch_all($result,MYSQLI_ASSOC);
                                // echo $result;   
                                ?>
      <table class="table table-responsive" >
        <style type="text/css">
            tr:nth-child(even) {
  background-color: #dddddd;
}
        </style>
 <thead style="background-color: #dddddd;">
                                        <th>ID</th>
                                        <th>Title</th>
                                        <!-- <th>Filename</th> -->
                                        <th>Manage</th>
                                        <th>Uploaded Date</th>

                                        </thead>
                                        <tbody>
                                           
                                           <?php  foreach ($files as $file): ?>
                                                <tr>
                                                    <td><?php echo $file['id'];?></td>
                                                    <td><?php echo $file['Title'];?></td>
                                                     <!-- <td><?php //echo $file['filename'];?></td> -->
                                                     <td><a class="link-primary" target="_blank" href="Admin/letterformat/<?php echo $file['filename'];?>">
                                                         
                                                        <span class='badge badge-primary'>  <i class="fa fa-eye"></i> View </span> 

                                                     </a>
                                                   <a class="link-primary" download="Admin/letterformat/<?php echo $file['filename'];?>" href="Admin/letterformat/<?php echo $file['filename'];?>"><span class="badge badge-success"><i class="fa fa-download"></i>Download</span></a></td>
                                                    <td><?php echo $file['Time'];?></td>
                                                </tr>
                                            <?php endforeach ; 
}
                                            ?>
                                        </tbody>
      </table>
    </div>
  </div>
                              
                   </div>
    </div>
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
            </div>
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
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>