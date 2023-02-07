<?php
    include '../../helper/connection.php';
    
	$username=$_POST['username'];
    $password=md5($_POST['password']);
     
	$login1 = "SELECT * from admin where username='$username' AND password='$password'";
	$login2 = "SELECT * from user where username='$username' AND password='$password'";
	$login_query1 = mysqli_query($con,$login1);
	$data1 = mysqli_fetch_array($login_query1);
	$login_query2 = mysqli_query($con,$login2);
	$data2 = mysqli_fetch_array($login_query2);
	
	if($data1)
	{
		session_start();
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['role'] = "admin";


		header('location:../dashboard.php');
		
	}
	elseif($data2)
	{
		session_start();
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['role'] = "user";
		
		header('location:../../index.php');

	}
	else
	{
		echo "
		<script type='text/javascript'>
		alert('Username atau Password anda salah!')
		window.location='../index.php';
		</script>";
	}
?>