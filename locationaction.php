<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="locatebloodbank.css">
	<title>Locate Blood Bank</title>
</head>
<body>
	<div class="navbar">
			<div class="left">
				<img src="signage-organ-donation-blood-hospital-symbol.png" width="50px" height="50px">
			</div>
			<div class="right">
				<div class="dropdown">
			    	<button class="dropbtn">About
			      	<i class="fa fa-caret-down"></i>
			    	</button>
			    	<div class="dropdown-content">
			      		<a href="#">Link 1</a>
			      		<a href="#">Link 2</a>
			      		<a href="#">Link 3</a>
			    	</div>
		  		</div>
			  <a href="needblood.php">Need Blood</a>
			  <a href="locatebloodbank.php">Donate Blood</a>
			  <a href="loginform.php">Login</a>
			  <a href="signup.php">Register</a>
		 	</div> 
		</div>
		<div class="action">
			<?php 
				include("connection.php");
				$city=$_REQUEST['city'];
				$state=$_REQUEST['state'];
				if(isset($_POST['submit'])){
				$sql=" SELECT * FROM location WHERE city='$city'";
				$data=mysqli_query($conn,$sql);
				$total=mysqli_num_rows($data);
				if($total!=0){
					while($result=mysqli_fetch_assoc($data))
					{
						echo"
						<table border=3>
						<tr>
						<td>".$result['name']."</td>
						<td>".$result['phone_no']."</td>
						<td>".$result['city']."</td>
						</tr>
						</table>
						";
						echo "<br>";


					}
				}
				else{
					echo "no data found";
				}
			}
		?>
	</div>
		</div>
</body>
</html>