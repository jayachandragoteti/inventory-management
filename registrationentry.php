
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
        $a=$_POST['username'];
        $b=$_POST['password'];
        $c=$_POST['Category'];
        
    
        $query = "INSERT INTO `login` (`user`, `pass`, `cate`) VALUES ('$a', '$b', '$c')";
        $sql= mysqli_query($conn, $query);
        if ($sql) {
            echo "<script>alert('Registration successfully done..');</script>";
        echo "<script>window.location='registration.php';</script>";
        } else {
            echo "<script>alert('Registration failed..');</script>";
            echo "<script>window.location='registration.php';</script>";
        }
    
    }
	
	
?>