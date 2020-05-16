<?php
session_start();
if(isset($_SESSION['source']))
{
	header("Location:logg.php?AlreadLoggedIn");
	exit();
}
?>
<html>
<head>
  
		<title> Engineer registration</title >
		<link rel="stylesheet" type= "text/css" href="/project/css/style3.css">
</head>
<body>
	
	<div class ="signUpForm">
		<img src="/images/userIcon.png" class="userImg">
		<h1 > Sign Up Now </h1>
		<form action="/Celltower_web/signup/signUp.php" method = "post">		
				<input type = "text" name ="username" placeholder="username" class ="inputBox"  required>
				<br>
				<input type = "text" name ="lastname" placeholder="Lastname" class ="inputBox" required>
				<br>
				<input type="tel"  name="phone" placeholder="phone ###########" class ="inputBox" pattern="[0-9]{3}[0-9]{3}[0-9]{5}" required>
				<br>
				<input type = "text" name ="email" placeholder="Email" class ="inputBox"  required>
				<br>
				<input type = "password" name ="password" placeholder="Password" class ="inputBox"  required>		
				<br>
				<input type="password" name ="cpassword" placeholder="Confirm Password" class ="inputBox"  required>
				<br>
				<input type="date" name ="db" placeholder="DateofBirth" class ="inputBox"  required>
				<br>
				<input type="radio" id="male" name="gender" value="male" class ="inputBox"  required> <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female" class ="inputBox"  required> <label for="female">Female</label><br>
				<p><span><input type="checkbox"required></span> I agree to the terms of service </P>
				<div class="error">
				<?php
					if(isset($_GET['error'])){
					if($_GET['error'] == "InvalidEmailAndUsername" ){
						echo '<p> Invalid Email and Username</p>';
					}elseif($_GET['error'] == "InvalidEmail" ){
						echo '<p> Invalid Email</p>';
					}elseif($_GET['error'] == "InvalidUserName" ){
						echo '<p> Invalid Username</p>';
					}elseif($_GET['error'] == "PasswordsDontMatch" ){
						echo '<p> Passwords Dont Match </p>';
					}elseif($_GET['error'] == "usernameTaken" ){
						echo '<p> Username or Email Already exists </p>';
					}elseif($_GET['error'] == "emailExists" ){
						echo '<p> Email Already Exists </p>';
					}
				}
				?>
				</div>
				<button type ="submit" class="signUp_button"> Register </button>
				<hr>
				<p class="or"> OR </p>
				<p>Have an account? <a href="/Celltower_web/Login/logg.php">Log In Now </a></P>
		</form>
		
	</div>

</body>
</html>