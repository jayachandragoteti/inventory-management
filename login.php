<?PHP
	include 'conn.php';
	session_start();
	if(isset($_SESSION['userid'])){
		header('location:home.php');
	}else {
		$a=$_POST['username'];
		$b=$_POST['password'];
		$c=$_POST['cate'];
	
		$sql="SELECT * FROM `login` WHERE `cate`='$c' AND `user`='$a'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result); 
			if ($result) {
								if ($a==$row['user'] && $b==$row['pass'] && $c=="admin" ){
									$_SESSION['userid']=$c;	
									header('location:home.php');
								}elseif ( $a==$row['user'] && $b==$row['pass'] && $c=="departmentadmin"  ) {
									$_SESSION['userid']=$c;	
									$_SESSION['branch']=$a;	
									header('location:departments.php');
								}elseif ( $a==$row['user'] && $b==$row['pass'] && $c=="faculty"  ) {
									$_SESSION['faculty']=$c;	
									header('location:orderrequest.php');
								}elseif ( $a==$row['user'] && $b==$row['pass'] && $c=="security"  ) {
									$_SESSION['security']=$c;	
									header('location:securityinandout.php');
								}
								else {
									header('location:index.php');
			                     	#echo "password/username/option not mached";
								}
			
			} else {
				header('location:index.php');
				#echo "query not set";
			
			
			}
				



	}

	
	


?>
