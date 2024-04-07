<?php
$host='localhost';
$user='root';
$pwd='';
$dbname='clinic';
$con=@mysqli_connect($host,$user,$pwd,$dbname);
if(mysqli_connect_errno())
{
    printf("connection failed :%s\n",mysqli_connect_error());
    exit();
    
}
?>
