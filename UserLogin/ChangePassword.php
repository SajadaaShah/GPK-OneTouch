<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<body>
    
</body>
</html>
<?php
session_start();
$currentPassword=$_POST['currentpass'];
$newPassword=$_POST['newpass'];
$newCPassword=$_POST['newcpass'];

include "db_conn.php";
$currentuser=$_SESSION['student_user'];
$sqlpass="select password from student where username='$currentuser'";
$resultpass=mysqli_query($conn,$sqlpass);
while($row = mysqli_fetch_array($resultpass))  {//
    $origpass= $row['password'];
}
// echo $origpass;
try{
if($newCPassword!==$newPassword)
{
  ?>
   <script>
    swal("Passwords Dont Match", "New Password and Confirm New Password Doesnt Match", "error").then(function() {
    window.location = "ChangePass.php";
});
  </script>
  <?php
}
else{
    if($currentPassword==$origpass)
    {
$sql="update student set password='$newCPassword' where username='sarvesh123305@gmail.com'";

if (mysqli_query($conn, $sql)) {
    // echo 'Record updated successfully<script>"SAr"</script>';
  } else {
    // echo 'Record updated successfully<script>"SAr"</script>';

  }
?>
        <script>
        swal("Password Changed!", "Your password has been changed successfully", "success").then(function() {
        window.location = "index.php";
    });
      </script>
<?php
}
    else{
        ?>
         <script>
    swal("Wrong Password", "Your current password dont match with our data", "error").then(function() {
    window.location = "ChangePass.php";
});
  </script>
        <?php
    }
}
}
catch(Exception $ex){
    echo "$ex.Message()";
    ?>
    <script>
    swal("Error","There is some problem with change password", "error").then(function() {
    window.location = "ChangePass.php";
});
  </script>
  <?php
}

?>