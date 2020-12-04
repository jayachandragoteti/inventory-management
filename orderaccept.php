  <?PHP 
	include 'connect.php';
	include 'connect.php';
	session_start();
	if(!isset($_SESSION['userid']))
	{header('location:index.php');}
	elseif ($_SESSION['userid']!="admin")
	{
	  header('location:index.php');
	}
else{
		 $a=$_GET['k'];	
		$query=" SELECT * FROM `order`  WHERE `sno`='$a'";
		$sql=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($sql);
		
			$query="UPDATE `order` SET `status`='accept' WHERE `sno`='$a' ";
			$sql=mysqli_query($conn,$query);
			if($sql)
			{
				echo "<script>alert('Order Accepted');</script>";
				echo "<script>window.location='home.php';</script>";
			}
			else{
				
				echo "<script>alert('accept failed')</script>";
			}	
		}
?>