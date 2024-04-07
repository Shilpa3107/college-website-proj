<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<center>
<form method="post">
<table width="80%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right">New Appointment Date: </td>
    <td><input type="date" name="cdate"></td>
  </tr>
  <tr>
  	<td colspan="3">&nbsp;</td>
   </tr>
  <tr>
    <td colspan="2" align="center"><input type="Submit" name="submit"></td>
  </tr>
</table>
</form>
<?php
include "connect.php";
$id=$_GET['id'];
if(isset($_POST['submit']))
{
	$cdate1 = $_POST['cdate'];
	$cdate2=explode("-",$cdate1);
	$cdate=$cdate2[2]."-".$cdate2[1]."-".$cdate2[0];
  
  $sql="update patient set cdate='".$cdate."' where id=".$id;
  echo $sql;
  mysqli_query($con,$sql);
  ?>
<script>
alert("Appointment date has been changed successfully");
window.close();
//window.location='admin.php';
</script>  
  
<?php
}
?>


</body>
</html>
