<?php 
	        $con=mysqli_connect("localhost","root","","onetouch");

$id=$_GET['id'];
$filename = $_GET['filename'];


echo $id;
echo $filename;



                                

 try{    
                                       @$filepath="letterformat/".$filename;
                                         if(@!unlink($filepath))
                                            echo "<center>Unable to delete file</center> $filepath";
                                        else{
                                        	$q="delete from letterformats where id='$id'";
											mysqli_query($con,$q);
                                 header("Location:addletterformat.php");
											
                                            echo "</center>Image Deleted Successfully</center>";
                                             }
                                         }
                                     catch(Exception $ex)
                                     {
                                        echo $ex.getMessage();
                                     }
                                   



?>