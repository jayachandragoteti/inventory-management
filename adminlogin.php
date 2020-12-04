<?php
include "connect.php";
 session_start();
	if($_SESSION['user'] == 1)
	{
		header('location:index.php');
	}
 $us=$_POST['username'];
 $ps=$_POST['password'];
 
 $query = "SELECT * FROM `login` WHERE `user`='$us'";
 $sql = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($sql);
 
 if($row['pass']==$ps)
 {
	 $_SESSION['user'] = $row['sno'];
	 header('location:home.php');
 }
 else{
	 echo "<script>alert('Details are wrong')</script>";
 }
?>