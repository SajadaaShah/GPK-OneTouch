<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>GPK@OneTouch</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!--Navbar css-->
      <link rel="stylesheet" href="css/navbar.css">

      <link rel="stylesheet" href="css/forget.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"

      
    />
    <script src="script1.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
	
	<div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 colsm-6 col-md-3">
                
        <form class="form-container" name="Login" id="Login" action="verify_code.php" method="post"  > <!-- Action is not defined yet -->
            <div class="form-group">
                <h2 class="text-center">Verify</h2>
            <div class="mb-3">
              Mail is successfully send to your Email <?php echo $_SESSION['email'] ?>
            </div> 
          <div class="mb-3">
           
            <?php if(isset($_GET['error'])) { ?>
			    <p class="error"><?php echo $_GET['error']; ?></p>
		    <?php }?>
          </div>          
          <div class="mb-3">
            <label for="" class="form-label">Enter Code</label>
            <input type="text" onkeyup="isEmpty()" name="code" class="form-control"  placeholder="****" required>
            </div>
            <hr>
          <div class="text-center">
            <button type="submit" name="submit" id="btnSave" class="btn btn-primary btn-block" >Submit</button>
        </div>
        
        </form>
        </div>
        </div>
</div>
</body>
</html>