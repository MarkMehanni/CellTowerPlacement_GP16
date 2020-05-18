<?php
include_once 'db.php';
if(count($_POST)>0) {
mysqli_query($connection,"UPDATE users set id ='" . $_POST['id'] . "', password='" . $_POST['password'] . "', username='" . $_POST['username'] . "', lastname='" . $_POST['lastname'] . "' ,phone='" . $_POST['phone'] . "' ,email='" . $_POST['email'] ."' ,dateofbirth='" . $_POST['dateofbirth'] . "' ,gender='" . $_POST['gender'] ."' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($connection,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Information</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a> List</a>
</div>
ID: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br><br>

Password: <br>
<input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br><br>
User Name: <br>
<input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>">
<br><br>
Last Name :<br>
<input type="text" name="lastname" class="txtField" value="<?php echo $row['lastname']; ?>">
<br><br>
Phone:<br>
<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
<br><br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br> <br>

Date Of Birth:<br>
<input type="text" name="dateofbirth" class="txtField" value="<?php echo $row['dateofbirth']; ?>">
<br><br>
Gender:<br>
<input type="text" name="gender" class="txtField" value="<?php echo $row['gender']; ?>">
<br> <br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>