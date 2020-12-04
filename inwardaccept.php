  <?PHP 
	include 'connect.php';
	session_start();
	if(!isset($_SESSION['userid']))
	{header('location:index.php');}
	elseif ($_SESSION['userid']!="admin")
	{
	  header('location:index.php');
	}else
	{
		 $a=$_GET['k'];	
		$query=" SELECT * FROM `ward`  WHERE `sno`='$a' AND `ward` ='inward'";
		$sql=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($sql);
		
			$query="UPDATE `ward` SET `status`='accept' WHERE `sno`='$a' AND `ward` ='inward' ";
			$sql=mysqli_query($conn,$query);
			if($sql)
			{
				echo "<script>alert('Inward Accepted');</script>";
				echo "<script>window.location='home.php';</script>";
			}
			else{
				echo "<script>alert('accept failed')</script>";
				echo "<script>window.location='home.php';</script>";
			}	
		}
?>