<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require("db.php");

	function test_input($data) { // check for xss attacks using html
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	$email = test_input($_POST["email"]);
	$password = test_input($_POST["password"]);
	$username = test_input($_POST["username"]);
	$last = test_input($_POST["lastName"]);
	$gender = test_input($_POST["gender"]);
	$dB= test_input($_POST["dateOfBirth"]);
	$phone= test_input($_POST["phoneNumber"]);
    $userType = test_input($_POST["usertype"]);
	  
	 //checking for different errors
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		header("Location:signUpIndex.php?error=InvalidEmailAndUsername&firstname=".$username."&lastname=".$last);
		exit(); 
	}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location:signUpIndex.php?error=InvalidEmail&firstname=".$username."&lastname=".$last."username=".$username);
		exit();
	}elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username))
	{
		header("Location:signUpIndex.php?error=InvalidUserName&firstname=".$username."&lastname=".$last."email=".$email);
		exit();
	}elseif ($password != $conpassword)
	{
		header("Location:signUpIndex.php?error=PasswordsDontMatch&firstname=".$username."&lastname=".$last."&username=".$username. "&email=".$email);
		exit();
	}else {
		$stmt = $conn->prepare("SELECT username, email FROM users WHERE username=? OR email=? LIMIT 1"); //To check if the username or email already exists
		$stmt->bind_param('ss', $username, $email);
		$stmt->execute();
		$stmt->bind_result($username, $email);
		$stmt->store_result();
		if($stmt->num_rows>0) 
			{
				header("Location:signUpIndex.php?error=usernameTaken");
				exit();
			}
		else { // to insert into the database using prepared statements
		$stmt = $conn->prepare("INSERT INTO users(email, password,cnpassword, username ,lastName,gender,dateOfBirth,phoneNumber,usertype) VALUES(?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param('ssssss',$first,$last,$phone,$username,$email,$password);
		$stmt->execute();	
			$_SESSION['email'] = $email; // setting the session variables
			$_SESSION['password'] = $password;
			$_SESSION['username'] = $username;
			$_SESSION['lastName'] = $last;
			$_SESSION['gender'] = $gender;
			$_SESSION['dateOfBirth'] = $dB;
			$_SESSION['phoneNumber'] = $phone;
			$_SESSION['usertype'] = $userType;

			$_SESSION['source'] = "signUp";
			$sql = "SELECT user_id FROM users WHERE username = '" .  $username . "'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result);
			$_SESSION['userId']= $row['user_id'];
			header("Location:profile.php");
			exit();
		}
	}	
}
else {
	header("Location:loginIndex.php?error=LoginFirst");
	exit();
}