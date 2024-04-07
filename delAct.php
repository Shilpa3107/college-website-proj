<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php
include "connect.php";
$id=$_GET['id'];

	//$cdate1 = $_POST['cdate'];
	//$cdate2=explode("-",$cdate1);
	//$cdate=$cdate2[2]."-".$cdate2[1]."-".$cdate2[0];
  
  $sql="delete from patient where id=".$id;
  //echo $sql;
  mysqli_query($con,$sql);
  ?>
<script>
alert("Ammount has been refunded successfully.");
window.location="admin.php";
</script>  
  
<?php

?>


</body>
</html>
