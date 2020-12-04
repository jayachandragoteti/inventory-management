<?PHP
	include 'conn.php';
	session_start();
	if(!isset($_SESSION['userid']))
	{header('location:index.php');}
	elseif ($_SESSION['userid']!="admin")
	{
	  header('location:index.php');
	}else
	{
	  $d=$_SESSION['userid'];
	  $a=$_GET['k'];
	  $query ="DELETE FROM `branch` WHERE `sno` = '$a'";
	  
	  $sql= mysqli_query($conn, $query);
	  if ($sql) {
		  echo "<script>alert('REMOVED successfully..');</script>";
		  echo "<script>window.location='mbadepartment.php';</script>";
	  } else {
		  echo "<script>alert('DATA NOT REMOVED');</script>";
		  echo "<script>window.location='mbadepartment.php';</script>";
	  }
	}

	
	
	
?>