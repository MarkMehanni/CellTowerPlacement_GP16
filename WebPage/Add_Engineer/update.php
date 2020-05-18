<?php
require("db.php");
if(!isset($_GET['subject']))
{
	header("Location:Celltower_web\Login\logg.php.php?error=loginFirst");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Update </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body>
	  <div class="container-contact100">
                                   
			<form  method="post" action="" class="contact100-form validate-form">
				<span class="contact100-form-title"> Update Information
				</span>

                <?php if(isset($_GET['error'])){   // to display errors
			  if($_GET['error'] == "InvalidEmailAndUsername" ){
					echo '<p> Invalid Email and Username</p>';
				}elseif($_GET['error'] == "InvalidEmail" ){
					echo '<p> Invalid Email</p>';
				}elseif($_GET['error'] == "InvalidUserName" ){
					echo '<p> Invalid Username</p>';
				}elseif($_GET['error'] == "usernameTaken" ){
					echo '<p> Username Already Exists</p>';
				}elseif($_GET['error'] == "emailExists" ){
					echo '<p> Email Already Exists </p>';
				}
			} ?>
           <div class="wrap-input100 rs1-wrap-input100 validate-input">
             <form action="" method = "POST" class="contact100-form validate-form">   
				<?php  if($_GET['subject']=="name") { ?>
			
				<input type = "text" name ="username" placeholder="<?php echo $_SESSION['username']?>" class ="inputBox" required>
				<input type = "text" name ="lastname" placeholder="<?php echo $_SESSION['lastname']?>" class ="inputBox" required>
				
				<?php }  elseif($_GET['subject']=="username") { ?>
				<input type = "text" name ="username" placeholder="<?php echo $_SESSION['username']?>" class ="inputBox">
				<?php }  elseif($_GET['subject']=="email") { ?>
				<input type = "text" name ="email" placeholder="<?php echo $_SESSION['email']?>" class ="inputBox">
				<?php }  elseif($_GET['subject']=="phone") { ?>
				<input type="tel"  name="phone" placeholder="<?php echo $_SESSION['phone']?>" class ="inputBox" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
				<?php }  elseif($_GET['subject']=="password") { ?>
				<input type = "password" name ="password" placeholder="Password" class ="inputBox">
                <?php }  elseif($_GET['subject']=="dateofbirth") { ?>
				<input type = "date" name ="dateofbirth" placeholder="Date Of Birth : YYYY-MM-DD" class ="inputBox">
                <?php }  elseif($_GET['subject']=="gender") { ?>
                <div class="wrap-input100">
				<input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>
				</div>

				<button type ="submit" name= "update" class="contact100-form-btn">Confrim Update </button>
				<hr>
			</form></div>
            <div class="wrap-input100 rs1-wrap-input100 ">
            <button type ="submit" name ="cancel" class="contact100-form-btn"> Cancel </button>
            </div>
            </form>
            </div>
                    
<?php  // form processing
if (isset($_POST['update']))
{
    function trim_input($data) 
        { //to trim the input of any html code
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

	if ($_GET["subject"]=="username") // update username
	{	$username=trim_input($_POST["username"]);
		$stmt = $conn->prepare("SELECT username FROM users WHERE username=? LIMIT 1"); 
		$stmt->bind_param('s', $username);
		$stmt->execute();
		$stmt->bind_result($username);
		$stmt->store_result();
		if($stmt->num_rows>0){   // check if username exists
			
			header("Location:update.php?error=usernameTaken&subject=username");
			exit();
		}
		
		$sql = "UPDATE users SET username=? WHERE id= ? ";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('si',$username,$_SESSION["id"]);
		$stmt->execute();
		$_SESSION['source']=="update";
		header("Location:index.php?update=success");
		exit();
	}
	
	if ($_GET["subject"]=="phone") // update phone number
	{
		$phone=trim_input($_POST["phone"]);
		$sql = "UPDATE users SET phone=? WHERE id= ? ";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('si',$phone,$_SESSION["id"]);
		$stmt->execute();
		$_SESSION['source']=="update";
		header("Location:index.php?update=success");
		exit();
	}
	
	if ($_GET["subject"]=="email") //update email
	{	
		$email=trim_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){ // to check for a valid email
			header("Location:update.php?error=InvalidEmail&subject=email");
			exit();
		}else{
		$sql = "UPDATE users SET email=? WHERE id= ? ";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('si',$email,$_SESSION["id"]);
		$stmt->execute();
		$_SESSION['source']=="update";
		header("Location:index.php?update=success");
		exit();
		}
	}

	if ($_GET["subject"]=="password") //update password
	{
		if ($_POST["password"] ){ //confirm password
				header("Location:update.php?error=PasswordsDontMatch&subject=password"); // check for errors
		}else{
			$password=trim_input($_POST["password"]);
			$sql = "UPDATE users SET password=? WHERE id= ? ";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param('si',$password,$_SESSION["id"]);
			$stmt->execute();
			$_SESSION['source']=="update";
			header("Location:index.php?update=success");
			exit();
		}
    }
    if ($_GET["subject"]=="dateofbirth") // update dateofbirth
	{
		$db=trim_input($_POST["dateofbirth"]);
		$sql = "UPDATE users SET gender=? WHERE id= ? ";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('si',$db,$_SESSION["id"]);
		$stmt->execute();
		$_SESSION['source']=="update";
		header("Location:index.php?update=success");
		exit();
	}
    if ($_GET["subject"]=="gender") // update gender
	{
		$gender=trim_input($_POST["gender"]);
		$sql = "UPDATE users SET gender=? WHERE id= ? ";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('si',$gender,$_SESSION["id"]);
		$stmt->execute();
		$_SESSION['source']=="update";
		header("Location:index.php?update=success");
		exit();
	}
} 
?>  
   
<div class="container">
<div class="alert alert-success">
<strong>Item Updated Successfully!</strong>
</div> 
</body>
</html>  