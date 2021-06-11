<?php
session_start();
include('../db.php');
if(isset($_POST)){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql=mysqli_query($conn,"SELECT * FROM adminuser WHERE email='$email' AND password='$password'");
	$row=mysqli_fetch_assoc($sql);
	if(mysqli_num_rows($sql)>0){
		$_SESSION['id']=$row['id'];
		echo "<script>alert('Login Successfully');window.location.href='home.php';</script>";
	}else{
		echo "<script>alert('Login Failed');window.location.href='index.php';</script>";
	}
}
?>