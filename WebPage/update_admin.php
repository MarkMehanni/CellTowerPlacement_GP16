<?php
include_once 'db.php';
if(count($_POST)>0) {
mysqli_query($connection,"UPDATE users set id ='" . $_POST['id'] . "', password='" . $_POST['password'] . "', username='" . $_POST['username'] . "', lastname='" . $_POST['lastname'] . "' ,phone='" . $_POST['phone'] . "' ,email='" . $_POST['email'] ."' ,dateofbirth='" . $_POST['dateofbirth'] . "' ,gender='" . $_POST['gender'] ."' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
header("Location:update.php");
}
$result = mysqli_query($connection,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Information</title>
<link rel="stylesheet" type= "text/css" href="/CellTowerPlacement_GP16/style3.css">
</head>
<body>
<div><?php if(isset($message)) { echo $message; } ?>
</div>
	<div class="header">
		<h1>
			<a href="sidebaradmin.php" class="logo">CTP monitor <img class="lemon" src="/CellTowerPlacement_GP16/CellTower2.svg"></a>
		</h1>
	</div>
		
	<div class="signUpForm">
            <img src="/CellTowerPlacement_GP16/userIcon.png" class="userImg">
			<form name="frmUser" method="post" action="">
				<h1> Update Engineer Information </h1>
				<br>
				<input type="hidden" class ="inputBox" name="id" class="txtField" value="<?php echo $row['id']; ?>">
				<br>
				<input type="text" class ="inputBox" name="id"  value="<?php echo $row['id']; ?>">
				<br>
				<input type = "text" id ="username" name ="username" placeholder='Username' value="<?php echo $row['username']; ?>" class ="inputBox"pattern="[A-Za-z]{3,10}[0-9]{0,4}" required>
				<br>

				<input type = "text" name ="lastname" placeholder="Full Name" value="<?php echo $row['lastname']; ?>" class ="inputBox" pattern="[A-Za-z\s]{9,25}" title="Numbers aren't allowed!" required>
				<br>
							
				<input type="text"  id="phone" name="phone" placeholder="phone 010-123-45678" value="<?php echo $row['phone']; ?>" class ="inputBox" pattern="[0-9]{3}[0-9]{3}[0-9]{5}" required>
				<br>				
								
				<input type = "text" id="email" name ="email" placeholder="Email: someone@example.com" value="<?php echo $row['email']; ?>" class ="inputBox"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  required>
				<br>
						
				<input type = "password" id="password" name ="password" placeholder="Password"  value="<?php echo $row['password']; ?>" class ="inputBox"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>		
				<br>
				
				<input type="date"  id="dateofbirth" value="<?php echo $row['dateofbirth']; ?>" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])"
					 class="inputBox" name="dateofbirth" placeholder="Date Of Birth: YYYY-MM-DD" required >
				
				<input type="text" name="gender" class="inputBox" value="<?php echo $row['gender']; ?>"><br>
								
				<button type="submit" class="signUp_button" id="submitbtn" name="submit"> Update </button>
				<hr>
		</form>
	</div>
</body>
</html>