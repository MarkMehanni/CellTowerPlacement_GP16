<?php
include_once 'db.php';
$result = mysqli_query($connection,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Update Information</title>
</head>
<body>
<table>
<tr>
<td> Id </td>
<td>Password</td>
<td>User Name</td>
<td>Last Name</td>
<td>Phone</td>
<td>Email </td>
<td>Date Of Birth</td>
<td>Gender</td>
<td>Usertype</td>
<td>Action</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["id"]; ?></td> <br>
<td><?php echo $row["password"]; ?></td> <br>
<td><?php echo $row["username"]; ?></td> <br>
<td><?php echo $row["lastname"]; ?></td> <br>
<td><?php echo $row["phone"]; ?></td> <br>
<td><?php echo $row["email"]; ?></td> <br>
<td><?php echo $row["dateofbirth"]; ?></td> <br>
<td><?php echo $row["gender"]; ?></td><br>
<td><?php echo $row["usertype"]; ?></td><br>

<td><a href="update_admin.php?id=<?php echo $row["id"]; ?>">Update</a></td><br>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>