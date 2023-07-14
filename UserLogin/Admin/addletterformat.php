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
              <link rel="icon" type="image/png" sizes="16x16" href="../images/logogpk.png">

    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="css2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css2/css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                       
                        <b></b>
                         <li class="sidebar-item Selected">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="AllQuestions.php"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Questions</span>
                            </a>
                        </li>
                       
                        <li class="sidebar-item Selected select">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false">
                                <i class="fa fa-font Aside-Content" aria-hidden="true"></i>
                                <span class="hide-menu">Letter Formats</span>

                            </a>
                        </li>
                     
                        <li class="sidebar-item Selected">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="notifications.php"
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
                        <h4 class="page-title">Letter Formats</h4>
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
            <div class="container-fluid">
               
                            <div class="card-body">
                                <center><h3 class="box-title mb-0" style="font-weight: 700;
    line-height: 30px;
    font-size: 20px;">Letter Formats</h3></center>

                                <hr>
                                <form method="post" enctype="multipart/form-data">
                                  <center> <label>Title</label>
    <input type="text" name="title" required>
    <label>File Upload</label>
    <input type="File" name="file" required> <br><br>
       <button type="submit" name="submit" class="btn btn-outline-success">Add Letter Foramts</button>
    </center> 
</br>
    </form>
    <!-- <input type="submit" name="submit"> -->
   
 <?php 
 include 'db_conn.php';
 // if(isset($_POST['DeleteLF']))
 //                                     {
                                        
 //                                        $Queid=(int)$_POST['QueId'];
 //                                        if (is_numeric($Queid)) {
 //                                              // echo $num . " is numeric";
                                          
 //                                        try{    
 //                                         $sqllf="select * from letterformats where id='$Queid'";  
 //                                         $deletelf = mysqli_query($conn, $sqllf);
 //                                         // echo "Done";
 //                                        $filesdwn=mysqli_fetch_assoc($deletelf);
 //                                        // echo  $filesdwn['filename']; 
 //                                       @$filepath='letterformat/' . $filesdwn['filename'];
 //                                         if(@!unlink($filepath))
 //                                            echo "<center>Unable to delete file</center>";
 //                                        else{
 //                                         $sqllfQuery="delete from letterformats where id='$Queid'";  
 //                                         $deletelfQuery = mysqli_query($conn, $sqllfQuery);
 //                                            echo "</center>File Deleted Successfully</center>";

 //                                     }
 //                                     }
 //                                     catch(Exception $ex)
 //                                     {
 //                                        echo $ex.getMessage();
 //                                     }
 //                                 }
 //                                     else {
 //                                              echo "Please enter a valid Question Number";
 //                                                 }
 //                                     }
 ?>
      <?php 
                            

if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
       $dt2=date("Y-m-d H:i:s");
    #file name with a random number so that similar dont get replaced
     $pname = $_FILES["file"]["name"];

 // print_r($_FILES["file"]);
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = '../Admin/letterformat';    
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into letterformats(Title,filename,Time) VALUES('$title','$pname','$dt2')";
 
    if(mysqli_query($conn,$sql)){
 
   ?>
   <script type="text/javascript">
       swal("Success","Letter format uploaded successfully!!","success");
   </script>
   <?php
    }
    else{
        echo "Error Uploading File";
    }
}
 
 
                            ?>
                             <div>
    
 
                            </div>
                            <hr>

                             <div>

                               <center> <h2>Available Letter formats</h2></center>
                               <hr>
                               <div class="row justify-content-center">
    <div class="col-auto">
         <?php 
                                    include "db_conn.php";
                                    $sql="select id,filename,Title,DATE_FORMAT(Time,'%d %M %Y') as Time from letterformats";
                                    $result=mysqli_query($conn,$sql) or die("Unable to execute query");
                                    if(mysqli_num_rows($result)==0)
                                    {
                                        echo "No Letter formats";
                                    }
                                    else{
                                        $i = 1;
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
                                        <th>Filename</th>
                                        <th>View</th>
                                        <th>Download</th>
                                        <th>Uploaded Date</th>
                                        <th>Manage</th>
                                        </thead>
                                        <tbody>
                                           <?php  foreach ($files as $file): ?>
                                                <tr>
                                                    <td><?php echo $i++?></td>
                                                    <td><?php echo $file['Title'];?></td>
                                                     <td><?php echo $file['filename'];?></td>
                                                     <td><a class="link-primary" target="_blank" href="letterformat/<?php echo $file['filename'];?>">View</a></td>
                                                     <td><a class="link-primary" download="letterformat/<?php echo $file['filename'];?>" href="letterformat/<?php echo $file['filename'];?>">Download</a></td>
                                                  <td><?php echo $file['Time'];?></td>
                                                 <td><!-- <a href="">Delete</a> -->
 <a href="delete.php?id=<?php echo  $file['id'];?>&filename=<?php echo  $file['filename'];?>"> 
    <style>
        .badge{
            font-size : 100%;
        }
    </style>
                 <span class='badge badge-danger'> <i class="fa fa-trash"></i>Delete</a></span>


                                                  </td>
                                                </tr>

                                            <?php endforeach ; 
}
                                            ?>
                                        </tbody>
      </table>
    </div>
  </div>
                        
                               
                               
                                
                           
                            <!-- </div>  -->
                          
                           

                                     
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