<?PHP 
	include 'connect.php';
	session_start();
	if(!isset($_SESSION['branch'])){
		header('location:index.php');
	}else {
   $c=$_SESSION['userid'];
   $branch=$_SESSION['branch'];
   
   $a=$_GET['k'];	
   $query=" SELECT * FROM `branch`  WHERE `sno`='$a'";
   $sql=mysqli_query($conn,$query);
   $row=mysqli_fetch_array($sql);
   
	   $query="UPDATE `branch` SET `status`='REMOVED' WHERE `sno`='$a' ";
	   $sql=mysqli_query($conn,$query);
	   if($sql)
	   {
		   echo "<script>alert('Item Removed');</script>";
		   
		   echo "<script>window.location='departments.php';</script>";
	   }
	   else{
		   echo "<script>alert('faild-Item NotRemoved')</script>";
		   echo "<script>window.location='departments.php';</script>";
	   }	

  }
?>