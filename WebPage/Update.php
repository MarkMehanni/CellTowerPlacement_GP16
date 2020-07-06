<?php
include_once 'db.php';
$result = mysqli_query($connection,"SELECT * FROM users");

?>
<html>
<head>
    <link rel="stylesheet" type= "text/css" href="style3.css">
	<link rel="stylesheet" type= "text/css" href="style4.css">
	<link rel="stylesheet" type= "text/css" href="style5.css">
<title>Update Information</title>
<style>
table { margin-top: 20px; }
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: orange;
  color: white;
}
</style>
</head>
<body >
 <div class="navBar">
		<h1>
			<a href="sidebaradmin.php" class="logo">CTP monitor <img class="lemon" src="CellTower2.svg"></a>
		</h1>
		<ul>
			<li>welcome admin</li>
			<li><a href="home.php" class="logout">Logout</a></li>
		</ul>
	</div>

<table id="customers">
  <tr>
    <th>User Name</th>
	<th>Full Name</th>
	<th>User Type</th>
	<th>Action</th>
  </tr>
  
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {

?><tr>

<td><?php echo $row["username"]; ?></td><br>
<td><?php echo $row["lastname"]; ?></td><br>
<td><?php echo $row["usertype"]; ?></td><br>

<td><a href="update_admin.php?id=<?php echo $row["id"]; ?>">Update Information</a></td><br>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>