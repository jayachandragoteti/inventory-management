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
	$a=$_POST['dt'];
	$b=$_POST['infra'];
	$c=$_POST['modelname'];
	$d=$_POST['serialnumber'];
	$e=$_POST['type'];
	$f=$_POST['purpose'];
	$g=$_POST['temper'];
	$h="inward";

	
	$query = "INSERT INTO `ward` (`date`, `infra`, `modelname`, `serialno`, `type`, `purpose`, `temper`,`ward`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g','$h')";
	
	$sql= mysqli_query($conn, $query);
	echo "<script>alert('Submited successfully..');</script>";
	echo "<script>window.location='inandout.php';</script>";
	}
?>