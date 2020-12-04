<?PHP

	include 'connect.php';
	session_start();
	if(!isset($_SESSION['userid']))
	{header('location:index.php');}
	elseif ($_SESSION['userid']!="admin")
	{
	  header('location:index.php');
	}
else{
	$a=$_POST['dt'];
	$b=$_POST['infra'];
	$c=$_POST['modelname'];
	$d=$_POST['serialnumber'];
	$e=$_POST['type'];
	$f=$_POST['purpose'];
	$g=$_POST['temper'];
	$h="outward";
	$i="accepted";
	$query = "INSERT INTO `ward` (`date`, `infra`, `modelname`, `serialno`, `type`, `purpose`, `temper`,`ward`,`status`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g','$h','$i')";
	$sql= mysqli_query($conn, $query);
	if ($sql) {
		echo "<script>alert('outward details have been uploaded')</script>";
	    echo "<script>window.location='outandin.php';</script>";
	}else{
		echo "<script>alert('outward details are Not Uploaded')</script>";
	    echo "<script>window.location='outandin.php';</script>";
	}
	
}	
?>