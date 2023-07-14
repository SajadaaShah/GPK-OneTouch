<?php

$idorig=$_GET['id'];
$tablename='qna';
$Filename = "AllQuestions.php";
 include '../db_conn.php';
$sql="select id,Question,Answer,DATE_FORMAT(Time,'%d %M %Y') as Time  from $tablename where id=$idorig";
try{
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==0)
    {
          echo "No pictures available";
    }
    $file = mysqli_fetch_assoc($result);

}
catch(Exception $e)
{
    echo $e.getMessage;
}
 
 if(isset($_POST['done'])){

$id=$_POST['id'];

// $Question=$_POST['que'];
$Answer=$_POST['ans'];

   // echo " I got in  thsss";
    $q = " update $tablename set id='$id', Answer='$Answer' where id='$idorig'  ";
      mysqli_query($conn,$q);

  echo "<script>window.location.href='$Filename';</script>";
  exit;
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
<form method="post" enctype="multipart/form-data">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">Update Operation</h1>
 </div><br>

 <label>ID </label>
 <input type="text" name="id" value="<?php echo $file['id'];?>" class="form-control"> <br>

 <label> Question </label>
 <!-- <input type="file" name="filenm" value="<?php //echo $file['Filename'];?>" class="form-control"> <br> -->
 <textarea id="que" name="que" value="" class="form-control" readonly><?php echo $file['Question'];?></textarea>
<!-- <input type="text" id="que" name="que" value="<?php //echo $file['Question'];?>" readonly /> <br> -->
 <label> Answer </label>
 <textarea name="ans" value="" class="form-control"><?php echo $file['Answer'];?></textarea>
 <!-- <input type="text" name="ans" value="<?php //echo $file['Answer'];?>" class="form-control"> <br> -->

  <label> Time </label>
 <input type="text" name="time"  value="<?php echo $file['Time'];?>" class="form-control" readonly> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>