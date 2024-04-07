
<?php
session_start();
if(isset($_SESSION['username']))
{
    session_destroy();
    
    //header("location:login.php");
	
   echo "<script>window.location='index.php';</script>"; 
}
else
//header("location:login.php");
 echo "<script>window.location='index.php';</script>";
?>