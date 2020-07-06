<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cell Tower</title>
    <meta name="keywords" content="Example, Example2"/>
    <link rel="stylesheet" type= "text/css" href="style3.css">
	<link rel="stylesheet" type= "text/css" href="style4.css">
	<link rel="stylesheet" type= "text/css" href="style5.css">
	<link rel="stylesheet" type= "text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="./js/external/jquery-1.11.0.min.js"></script>

    <script>
      document.addEventListener("touchstart", function() {},false);

      var mobileHover = function () {
    $('*').on('touchstart', function () {
        $(this).trigger('hover');
    }).on('touchend', function () {
        $(this).trigger('hover');
        });
    };
    mobileHover();
    </script>

  </head>
  <body>
  <div class="navBar">
		<h1>
			<a href="home.php" class="logo">CTP monitor <img class="lemon" src="CellTower2.svg"></a>
		</h1>
		<ul>
			<li>welcome admin</li>
			<li><a href="home.php" class="logout">Logout</a></li>
		</ul>
	</div>
<div class="row">
  <div class="column"><a href="admin-map.php"><div class="button2">view antennas</div></a></div>
  <div class="column"><a href="index.php"><div class="button2">Add Engineer</div></a></div>
  <div class="column"><a href="Update.php"><div class="button2">Update User</div></a></div>
  <div class="column"><a href="deleteindex.php"><div class="button2">Delete User</div></a></div>
</div>

<div class="row" style="margin-left: 400px;">
  <div class="column"> <a href="indexadmin.php"><div class="button2">Add Admin</div></a></div>
  <div class="column"><a href="http://127.0.0.1:5000/"><div class="button2">Events</div></a></div>
</div>
  
  
