<?PHP
	include'connect.php';
	
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
				$h="pending";
				$i="inward";

				$query="INSERT INTO `ward` (`date`, `infra`,`modelname`,`serialno`,`type`,`purpose`,`temper`,`status`,`ward`) VALUES ('$a', '$b', '$c','$d','$e','$f','$g','$h','$i')";
				
				$sql=mysqli_query($conn,$query);
			if($sql)
			{
				echo "<script>alert('inward details have been uploaded')</script>";
				echo "<script>window.location='inandout.php';</script>";
			}else{
					echo "<script>alert('inward details are Not Uploaded')</script>";
					echo "<script>window.location='inandout.php';</script>";
				}
	}	
			
?>