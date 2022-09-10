<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <link rel="stylesheet" type="text/css" href="loginform.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="login-page">
  <div class="form">

    <form class="login-form" method="POST" action="authentication.php">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <button name="submit">login
        <i class="fa fa-user-plus" style="font-size:15px"></i>
      </button>
      <p class="message">Not registered? <a href="signup.html">Create an account</a></p>
    </form>

  </div>
</div>
</body>

</html>
