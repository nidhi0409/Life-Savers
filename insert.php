<?php
include('connection.php');  
 
  $a      =$_REQUEST['name'];
  $b      =$_REQUEST['email'];
  $c      =$_REQUEST['password']; 
  $d      =$_REQUEST['m_no'];

$temp="INSERT INTO login(name,email,password,mobile_number) VALUES ('$a', '$b', '$c', '$d')";
if(mysqli_query($conn, $temp)){
  echo '<script>alert("Data Submitted")</script>';
  header("Refresh:2; url=index.php ");
} 
else{
  echo "Error:" .$temp."<br>".mysqli_error($conn); 
}
mysqli_close($conn);
?>