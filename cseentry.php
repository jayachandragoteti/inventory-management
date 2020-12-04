
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
	  $a=$_POST['dt'];
	$b=$_POST['infra'];
	$c=$_POST['modelname'];
	$d=$_POST['serialnumber'];
	$e=$_POST['type'];
	$f=$_POST['purpose'];
	$g=$_POST['temper'];
	$h="Dblock";
	$n="CSE";
	$s="PENDING";

	$query = "INSERT INTO `branch` (`date`, `infra`, `modelname`, `serialno`, `type`, `purpose`, `temper`,`block`,`department`,`status`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g','$h','$n','$s')";
	
	$sql= mysqli_query($conn, $query);
	if ($sql) {
		echo "<script>alert('Submited successfully..');</script>";
	echo "<script>window.location='csedepartment.php';</script>";
	} else {
		echo "<script>alert('Submited failed..');</script>";
		echo "<script>window.location='csedepartment.php';</script>";
	}
	
	}

	
	
	
?>