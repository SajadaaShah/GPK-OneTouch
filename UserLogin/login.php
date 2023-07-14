<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

       <title>GPKP@OneTouch</title>
     <link rel="icon" type="image/png" sizes="16x16" href="images/logogpk.png">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title></title>
</head>
<body>
<!-- Button trigger modal -->
<!-- Modal -->
 <?php  
//Student

if(isset($_POST["submit"])){  
if(!empty($_POST['Email']) && !empty($_POST['Pass'])) {  
    $user=$_POST['Email'];  
    $pass=$_POST['Pass'];  
  $_POST['Email']="";
  $_POST['Pass']="";
    $con=mysqli_connect('localhost','root','',"onetouch"); 
    $query1=mysqli_query($con,"SELECT * FROM student WHERE Email='".$user."' AND password='".$pass."'");  
    $numrows=@mysqli_num_rows($query1);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query1))  
    {  
    $dbusername=$row['Email'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
     $_SESSION['student_user']=$user;  
     header("Location:index.php");
   ?>

   <?php
    }  
    } else {  
     ?>
      <script>
   swal("Login Failed", "Incorrect username or password", "error").then(function() {
    window.location = "home.php";});
    </script>
     <?php
    }  
  
} else {  
    // echo "All fields are required!"; 
    ?>
    <script>
    swal("Login Failed", "All fields required", "warning").then(function() {
     window.location = "home.php";});
     </script>
     <?php

}  
}  
//Visitor

if(isset($_POST["submit1"])){  
  
if(!empty($_POST['Email1']) && !empty($_POST['Pass1'])) {  
    $user=$_POST['Email1'];  
    $pass=$_POST['Pass1'];  
  $_POST['Email1']="";
  $_POST['Pass1']="";
    $con=mysqli_connect('localhost','root','',"onetouch"); 
    $query2=mysqli_query($con,"SELECT * FROM Visitor WHERE email='".$user."' AND password='".$pass."'");  
    $numrows=@mysqli_num_rows($query2);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query2))  
    {  
    $dbusername=$row['email'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    // session_start();  
    // $_SESSION['sess_visitor']=$user;
    header("Location:index.php");  
?>
<!--  <script>
   swal("Welcome To GPK@OneTouch!", "Logged In Successfully", "success").then(function() {
    window.location = "index.php";});
    </script> -->
<?php
    }  
    } else {  
      ?>
       <script>
   swal("Login Failed", "Incorrect username or password", "error").then(function() {
    window.location = "home.php";});
    </script>
      <?php
      
    }  
  
} else {  
    // echo "All fields are required!"; 
    ?>
    <script>
    swal("Login Failed", "All fields required", "warning").then(function() {
     window.location = "home.php";});
     </script>
    <?php

}  
} 

//Admin Login


if(isset($_POST["submit2"])){  
  
if(!empty($_POST['Email2']) && !empty($_POST['Pass2'])) {  
    $user=$_POST['Email2'];  
    $pass=$_POST['Pass2'];  
  $_POST['Email2']="";
  $_POST['Pass2']="";
    $con=mysqli_connect('localhost','root','',"onetouch"); 
    $query2=mysqli_query($con,"SELECT * FROM Admin WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=@mysqli_num_rows($query2);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query2))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['admin_login']=$user;  
    header("Location:Admin/MainPage.php");
 ?>
 
 <?php
    }  
    } else {  
  ?>
  <script>
  swal("Admin Authentication Failed", "Incorrect username or password", "error").then(function() {
       window.location = "Admin/adminlogin.html";});

   </script>
  <?php

    }  
  
} else {  
    // echo "All fields are required!"; 
    ?>
     <script>
    swal("Admin Authentication Failed", "All fields required", "warning").then(function() {
     window.location = "Admin/adminlogin.html";});

     </script>
    <?php

}  
} 
?>  

</body>
</html>
