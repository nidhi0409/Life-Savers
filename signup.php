<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

 <div class="signup-page">
  <div class="form">

    <form class="register-form" method="POST" action="insert.php">
      <input type="text" placeholder="name" name="name" required/>
      <input type="text" placeholder="email address" name="email" required/>
      <input type="text" placeholder="password" name="password" required/>
      <input type="number" placeholder="Phone Number" name="m_no" required/>
      <button name="submit">Sign Up
        <i class="fa fa-user-plus" style="font-size:15px"></i>
      </button>
      <p class="message">Already registered? <a href="loginform.php">Log In</a></p>
    </form>

</div>  
</div>
</body>

</html>
