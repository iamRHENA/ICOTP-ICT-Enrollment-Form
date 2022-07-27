<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<center>
<body>

<div class="logo"><a href="#"><img src="images/micp.jpeg"></a> </div> 

<h1 style="color:#b5179e;">Sign Up</h1>
<p>Hello Enrollees! You must Sign In your email account to proceed with the Enrollment Form. <br>
We assure you that all your account and password will not be shared to anyone.</p>
<div class="border">

  <div class="container">

	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>

      <div class="imgcontainer">
              <img src="images/avatar2.jpeg" alt="Avatar" class="avatar">

          </div>

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="text" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	
      
      
	
	  
    
  		Already have an account? <a href="login.php">Sign in</a><br><br>
		 
  	
		<label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>  <br>  

		<button type="submit" class="btn" name="reg_user">SUBMIT</button><br>
		<button type="reset" value="Reset" class="reset">Cancel</button><br>
            
		
				
  </div>
  
</form>
</div>
 
  
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