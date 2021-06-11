<?php
include('../db.php');
if(isset($_POST))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$photo=$_FILES['photo']['name'];
	$tmp=$_FILES['photo']['tmp_name'];
	if($photo)
	{
		move_uploaded_file($tmp,"../img/$photo");
	}
	$sql=mysqli_query($conn,"SELECT * FROM adminuser WHERE email='$email'");
	if(mysqli_num_rows($sql)>0)
	{
		echo "<script>alert('Email already exist ');window.location.href='adminusercreate.php';</script>";
	} else {
		mysqli_query($conn,"INSERT INTO adminuser (name,password,email,photo) VALUES ('$name','$password','$email','$photo')");
		echo "<script>alert('Successfully registrated,Please login ');window.location.href='adminusercreate.php';</script>";
	}
}

?>