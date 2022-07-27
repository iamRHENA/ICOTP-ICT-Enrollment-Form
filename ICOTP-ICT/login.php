<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<center>
<body>
<div class="logo"><a href="#"><img src="images/micp.jpeg"></a> </div> 
  <div class="header">
  <h1 style="color:#b5179e;">LOG IN</h1>
  <p>Hello Enrollees! You must Sign In your email account to proceed with the Enrollment Form. <br>
We assure you that all your account and password will not be shared to anyone.</p>
<div class="border">

  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>

      <div class="imgcontainer">
              <img src="images/avatar2.jpeg" alt="Avatar" class="avatar">

          </div>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
      <button type="reset" value="Reset" class="reset">Cancel</button><br>
            
  	<p>
  		Don't have an account? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <style>
      .logo{
float:left;
min-height:1px;
width: 15px;
background-color:white;
}
      </style>
  <?php require 'styles/loginCSS.php' ?>
</body>
</html>