<?php 
	        $con=mysqli_connect("localhost","root","","onetouch");

$id=$_GET['id'];

echo $id;




                                

 try{    
                                     
                                        
                                        	$q="delete from qna where id='$id'";
											mysqli_query($con,$q);
                                 header("Location:AllQuestions.php");
                                 
                                             // }
                                         }
                                     catch(Exception $ex)
                                     {
                                        echo $ex.getMessage();
                                     }
                                   



?>