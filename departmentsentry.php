
<?PHP
	include 'conn.php';
	
	session_start();
	if(!isset($_SESSION['branch'])){
		header('location:index.php');
	}else {
				$c=$_SESSION['userid'];
				$branch=$_SESSION['branch'];
				if ($branch=="ECE") {
					$h="Ablock";
				}elseif ($branch=="CSE") {
					$h="Dblock";
				}elseif ($branch=="EEE") {
					$h="Cblock";
				}elseif ($branch=="IT") {
					$h="Bblock";
				}elseif ($branch=="MECH") {
					$h="Eblock";
				}
				elseif ($branch=="CIVIL") {
					$h="Eblock";
				}else{
					$h="block";
				}
					$a=$_POST['dt'];
					$b=$_POST['infra'];
					$c=$_POST['modelname'];
					$d=$_POST['serialnumber'];
					$e=$_POST['type'];
					$f=$_POST['purpose'];
					$g=$_POST['temper'];
					$n=$branch;
					$s="ACCEPTED";

					$query = "INSERT INTO `branch` (`date`, `infra`, `modelname`, `serialno`, `type`, `purpose`, `temper`,`block`,`department`,`status`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g','$h','$n','$s')";
					
					$sql= mysqli_query($conn, $query);
					if ($sql) {
						echo "<script>alert('Submited successfully..');</script>";
					echo "<script>window.location='departments.php';</script>";
					} else {
						echo "<script>alert('Submited failed..');</script>";
						echo "<script>window.location='departments.php';</script>";
					}
					
					
  }

	
?>