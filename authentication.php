<?php
session_start();
include('connection.php');

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

if(isset($_POST['submit'])){
	/*$username=stripcslashes($username);
	$password=stripcslashes($password);
	$username=mysqli_real_escape_string($conn, $username);
	$password=mysqli_real_escape_string($conn, $password); */

	if($username!=""&&$password!="")
	{
		$sql="SELECT * FROM login WHERE email='$username'/*, password='$password'*/";
		$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
		$row=mysqli_fetch_array($result, MYSQLI_ASSOC);

		$count=mysqli_num_rows($result);

		if($count==1){
			echo '<script>alert("Login Successful")</script>';
		  	/*header("Refresh:2; url=index.php ");*/
		  }
		else{
			echo '<script><h1>Login failed. Invalid Userame or Password</h1></script>';
		}
		if($row)
		{
			$p=$row['password'];
			/*$password=password_verify($password,$p);*/
		
		if($password)
		{
			echo "Login Successful";
			$_SESSION['isAdmin']=0;
			$_SESSION["user_name"]=$row['name'];
			$_SESSION["user_email"]=$row['email'];
			header("Refresh:0; url=index.php");

		}
		else{
			echo "Wrong Password";
		}
	}
	else{
		echo"user does not exist";
		session_unset();
		session_destroy();
	}
	}
}
?>

