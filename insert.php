<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"Course");
echo($_POST['email']);
$name=$_POST['name'];
$phoneNumber=$_POST['phone'];
$email=$_POST['email'];
$idNumber=$_POST['id'];
mysqli_query($con,"insert into personalinfo(name,email,phoneNumber,idNumber) values('$name','$email','$phoneNumber','$idNumber');");
mysqli_close($con);
$_SESSION['name']=$name;
header('location: dashbd.php');
?>
