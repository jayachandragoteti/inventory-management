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
	include 'connect.php';
	$a=$_POST['date'];
	$b=$_POST['facid'];
	$d=$_POST['item'];
	$c=$_POST['qty'];
	$e=$_POST['expp'];
	$f=$_POST['priority'];
	$g="pending";
	  $query = "INSERT INTO `order` (`date`, `facid`, `item`,`qty`, `expp`, `priority`,`status`) VALUES ('$a', '$b', '$c', '$d', '$e','$f','$g')";
	  $sql= mysqli_query($conn, $query);
	  if ($sql) {
		  echo "<script>alert('oder details have been uploaded')</script>";
		  echo "<script>window.location='home.php';</script>";
				  
	  }
	  else{
		  echo "<script>alert('oder details are Not Uploaded')</script>";
		  echo "<script>window.location='request.php';</script>";
		  
		  
	  }
}
  
	
?>