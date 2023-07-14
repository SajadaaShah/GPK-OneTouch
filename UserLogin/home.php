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
       <link rel="icon" type="image/png" sizes="16x16" href="images/logogpk.png">

   <!--Bootstrap-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>
<!--Bootstrap-->

    <!-- Favicon icon -->
   
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css2/css/style1.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="js/coded.js"></script>
   <script src="js/scrollToTop.js"></script>
</head>

<body>
 <div id="progress">
      <span id="progress-value">&#x1F815;</span>
    </div>
   
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
            <div class="navbar">
    <a href="#" style="color:plum;" >Home</a>
    <a href="about.html">About</a>
    <a href="contact.html">Contact Us</a>
            </div>
            
         

            <div class="icons">
                <i class="fa fa-bars" id="menu-btn" class="menu-btn" ></i>
                <!-- <input type="text" class="search"  placeholder="Search...."> -->
<!-- <i class="fas fa-search" id="search" ></i> -->
<a href="#" style="padding-bottom:20px;" id="LoginRegister"  data-toggle="dropdown" role="button" ><i class="  fa fa-user-circle" id="search" onclick="inputopen()">
</i></a> 

 <div class="dropdown-menu dropleft"  id="LoginRegister" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item "  id="dropdownMenuLink"  data-toggle="dropdown" role="button"  href="#">Login</a>
  <a class="dropdown-item" href="" data-toggle="modal" data-target="#RegiModal" >Register</a>
 <style type="text/css">  .dropdown-item:hover {     
color: black;
background-color: thistle;
transform: scale(1.1);
   }
.navbar {
margin-right: 10% !important;
}</style>
   <div class="dropdown-menu " id="dropdownMenuLink" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" id="dropdownlogin" data-toggle="modal" data-target="#LoginModal">Login as Student</a>
    <a class="dropdown-item" id="dropdownlogin" data-toggle="modal" data-target="#VisitorModal">Login as Visitor</a>
    <a class="dropdown-item" href="/GpkOneTouch/userLogin/Admin/adminlogin.html">Login as Admin</a>
  </div>
   </div>


            </div>

         
            
            
</div>
<img  class="main-image" src="images1/logogpkfinal.png"  alt="no img">

        <!-- ============================================================= -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="margin:0px;" >


            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
          
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" >
                <div class="row">
                    <!-- .col -->
                    <div class="col-sm-12">

                        <div class="card white-box p-0">
                            <div class="card-body">
<div class="input-group">
<form action="search.php" method="post" class="search_bar">
    <input id="search-input" name="searchterm" placeholder="Search..." type="search" id="form1" class="formcontrol"  required />
    <!-- <label class="form-label" for="form1">Search</label> -->
  <button id="search-button" type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
  </form>
  </div>

</div>

<style type="text/css">
   .input-group{
      justify-content: center;
   }
   .formcontrol{
      /*border: 1px solid black;*/
   }
   #search-button:hover{
      transition: 0.8s;
      background-color: red;
   }
   #search-button{
      border-radius: 30px;
      cursor: pointer;
   }
   .search_bar:hover{
      transition: 0.8s;
      
      transform: scaleX(1.01);
   }
   .search_bar{
      width: 100%;
      max-width: 700px;
      justify-content: center;
      background: rgba(255, 255, 255, 0.2);
      display: flex;
      align-items: center;
      border-radius: 60px;
      border: 1px solid;
      padding: 10px 20px;
   }
   .search_bar input{
      flex: 1;
      border: 0;
      outline: none;
      font-size: 20px;
      /*color: #cac7ff;*/
   }
</style>
</div>
<div class = "white-box"> 
                                <center><h3 class="Heading-Q" ><span class="faq">F</span>requently <span class="faq">A</span>sked <span class="faq">Q</span>uestions</h3></center>
                            <?php 
                  include "db_conn.php";
                  $sql = "select Question,Answer,DATE_FORMAT(Time,'%d %M %Y') as time from qna order by Time limit 10";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="comment-widgets">
                                <!-- Comment Row -->
                              
                                <div class="d-flex flex-row comment-row p-3">
                                    <div class="p-2"><img src="plugins/images/users/ab.png" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text ps-2 ps-md-3 w-100">
                                        <h5 class="font-medium">   <?php echo "{$row['Question']}";?></h5>
                                        <span class="mb-3 d-block">  <?php echo "{$row['Answer']}";?> </span>
                     

                                         <div class="comment-footer d-md-flex align-items-center">
                                           
                                             <div class="like__btn">
                                                <span id="icon"><i class="far fa-thumbs-up"></i></span>
                                                <span id="count">0</span> Like
                                             </div>
                                             <style type="text/css">
                                                .like__btn {
                                                      padding: 6px 11px;
                                                      /*background: #0080ff;*/
                                                      font-size: 16px;
                                                      font-family: "Open Sans", sans-serif;
                                                      border-radius: 5px;
                                                      /*color: #e8efff;*/
                                                      outline: none;
                                                      border: none;margin-left:4px;
                                                      cursor: pointer;
                                                }
                                                .like__btn:hover {
                                                      transform: scale(1.1);
                                                      color: blue;
                                                }
                                                .dislike__btn:hover {
                                                      transform: scale(1.1);
                                                      color: blue;
                                                }
                                                 .dislike__btn {
                                                      padding: 6px 11px;
                                                     /* background: #0080ff;*/
                                                      font-size: 16px;
                                                      font-family: "Open Sans", sans-serif;
                                                      border-radius: 5px;
                                                      /*color: #e8efff;*/
                                                      outline: none;
                                                      border: none;
                                                      cursor: pointer;
                                                }



                                             </style>
                                             <script type="text/javascript">
                                                const likeBtn = document.querySelector(".like__btn");
                                               // const dislikeBtn = document.querySelector(".like__btn");
                                                let likeIcon = document.querySelector("#icon"),
                                                 count = document.querySelector("#count");

                                                let clicked = false;


                                                likeBtn.addEventListener("click", () => {
                                                       if (!clicked) {
                                                         clicked = true;
                                                         likeIcon.innerHTML = `<i class="fas fa-thumbs-up"></i>`;
                                                         likeIcon.style.color="blue";
                                                         count.textContent++;
                                                       } else {
                                                         clicked = false;
                                                         likeIcon.innerHTML = `<i class="far fa-thumbs-up"></i>`;
                                                         likeIcon.style.color="black";
                                                         count.textContent--;
                                                       }
                                                });

                                                const dislikeBtn = document.querySelector(".dislike__btn");
                                               
                                                let dislikeIcon = document.querySelector("#icon"),
                                                 xcount = document.querySelector("#count");

                                                let xclicked = false;


                                                dislikeBtn.addEventListener("click", () => {
                                                       if (!xclicked) {
                                                         xclicked = true;
                                                         dislikeIcon.innerHTML = `<i class="fas fa-thumbs-down"></i>`;
                                                         dislikeIcon.style.color="blue";
                                                         xcount.textContent++;
                                                       } else {
                                                         xclicked = false;
                                                         dislikeIcon.innerHTML = `<i class="far fa-thumbs-down"></i>`;
                                                         xcount.textContent--;
                                                       }
                                                });

                                             </script>
                                             <div class="dislike__btn">
                                                <span id="icon"><i class="far fa-thumbs-down"></i></span>
                                                <span id="count">0</span> Dislike
                                             </div>
                                              
                                               
                                            <div class="text-muted fs-2 ms-auto mt-2 mt-md-0"> 
                                                <?php echo "{$row['time']}";?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        <?php }?>

                        <center>
                              <a href="ViewAllQuestions.php" > <button id="view-btn">View More..</button>
                                  </a>               </center>
                               
                        </div>
                    </div>
                  
                    <!-- /.col -->
                </div>
            </div>
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

    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header text-center">
                                       <h5 class="modal-title w-100" id="exampleModalLabel">Login</h5>
                                       <button type="button" class="btn-close" aria-label="Close"
                                          data-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                       <form name="Login" id="Login" action="login.php" method="post">
                                          <div class="mb-3">
                                          </div>
                                          <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Email
                                                address</label>
                                             <input type="email" onkeyup="isEmpty()" name="Email" class="form-control"
                                                id="InputEmail1" aria-describedby="emailHelp" required>
                                          </div>
                                          <div class="mb-3">
                                             <label for="exampleInputPassword1" class="form-label">Password</label>
                                             <input type="password" onkeyup="isEmpty()" name="Pass" class="form-control"
                                                id="InputPassword1" required>
                                          </div>
                                          <div class="">
                                             <a href="forget.php">Forgot Password?</a></br>
                                          </div>
                                          <hr>
                                          <div class="text-center">
                                             <button type="submit" name="submit" id="btnSave" class="btn btn-danger "
                                                >Submit</button>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                     </div>
   <!--End Login Modal-->
     <!--Login Visitor Modal-->
   <div class="modal fade" id="VisitorModal" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header text-center">
                                       <h5 class="modal-title w-100" id="exampleModalLabel">Login</h5>
                                       <button type="button" class="btn-close" aria-label="Close"
                                          data-dismiss="modal"></button>

                                    </div>
                                    <div class="modal-body">
                                       <form name="Login" id="VisitorForm" action="login.php" method="post">
                                          <div class="mb-3">
                                          </div>
                                          <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Email
                                                address</label>
                                             <input type="email" onkeyup="isEmpty()" name="Email1" class="form-control"
                                                id="InputEmail2" aria-describedby="emailHelp" required>
                                          </div>
                                          <div class="mb-3">
                                             <label for="exampleInputPassword1" class="form-label">Password</label>
                                             <input type="password" onkeyup="isEmpty()" name="Pass1" class="form-control"
                                                id="InputPassword2" required>

                                          </div>
                                          <div class="">
                                             <a href="forget.php">Forgot Password?</a></br>
                                          </div>
                                          <hr>
                                          <div class="text-center">
                                             <button type="submit" name="submit1" id="btnSave1" class="btn btn-danger "
                                                >Submit</button>

                                       </form>
                                    </div>
                                 </div>

                              </div>
                           </div>
                     </div>
   <!--End Visitor Modal-->
      <!--Login Admin Modal-->
   <div class="modal fade" id="AdminModal" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header text-center">
                                       <h5 class="modal-title w-100" id="exampleModalLabel">Admin Login</h5>
                                       <button type="button" class="btn-close" aria-label="Close"
                                          data-dismiss="modal"></button>

                                    </div>
                                    <div class="modal-body">
                                       <form name="Login" id="AdminForm" action="login.php" method="post">
                                          <div class="mb-3">
                                          </div>
                                          <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label">Email
                                                address</label>
                                             <input type="email" onkeyup="isEmpty()" name="Email2" class="form-control"
                                                id="InputEmail3" aria-describedby="emailHelp" required>
                                          </div>
                                          <div class="mb-3">
                                             <label for="exampleInputPassword1" class="form-label">Password</label>
                                             <input type="password" onkeyup="isEmpty()" name="Pass2" class="form-control"
                                                id="InputPassword3" required>

                                          </div>
                                          <!-- <div class="">
                                             <a href="forget.php">Forgot Password?</a></br>
                                          </div> -->
                                          <hr>
                                          <div class="text-center">
                                             <button type="submit" name="submit2" id="btnSave2" class="btn btn-danger "
                                                >Submit</button>

                                       </form>
                                    </div>
                                 </div>

                              </div>
                           </div>
                     </div>
   <!--End Admin Modal--> 
   <!--Register Modal-->
            <script>
                function MyMailxy(){
                    alert('How r you');
                }
            </script>

  <div class="modal fade" id="RegiModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header text-center">
                                 <h5 class="modal-title w-100" id="exampleModalLabel">Register</h5>
                                 <button type="button" class="btn-close" aria-label="Close"
                                    data-dismiss="modal"></button>

                              </div>
                              <div class="modal-body">
                                 <form name="Register" id="RegiModal" action="validation.php" method="post">
                                    <div class="mb-3">
                                    </div>
                                    <div>
                                    <?php if(isset($_GET['error'])) { ?>
                                          <p data-toggle="modal" data-target="#RegiModal" ></p>
                                          <p class="error"><?php echo $_GET['error']; ?></p>
                                       <?php }?>
                                    </div>
                                    <div class="mb-3">
                                       <label for="exampleInputEmail11" class="form-label">Name</label>
                                       <input type="text" name="NameReg" class="form-control" id="InputName"
                                          aria-describedby="" required>
                                    </div>
                                    <div class="mb-3">
                                       <label for="exampleInputEmail11" class="form-label">Email
                                          address</label>
                                       <input type="email" name="EmailReg" class="form-control" onfocusout="MyMailx()" id="InputEmail12"
                                          aria-describedby="emailHelp" required>

                                    </div>
                                    <div class="mb-3">
                                       <label for="Phone" class="form-label">Phone Number</label>
                                       <input type="text" name="Phone_no" class="form-control" id="InputNumber"
                                          required>
                                    </div>
                                    <div class="mb-3">
                                       <label for="exampleInputPassword1" class="form-label">Create
                                          Password</label>
                                       <input type="password" name="Password" class="form-control" id="InputPass"
                                          required>
                                    </div>
                                    <div class="mb-3">
                                       <label for="exampleInputPassword2" class="form-label">Confirm
                                          Password</label>
                                       <input type="password" name="ConfirmPassword" class="form-control"
                                          id="InputPass1" required>
                                    </div>
                                    <hr>
                                    <div class="text-center">

                                       <button type="submit" name="submitReg" id="btnSave11" class="btn btn-success"
                                          data-toggle="modal">Register</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
   <!--Ends Register Modal-->


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
let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');}
</script>
</body>

</html>