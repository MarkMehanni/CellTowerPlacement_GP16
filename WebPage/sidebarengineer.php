<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cell Tower</title>
    <meta name="keywords" content="Example, Example2"/>
	<link rel="stylesheet" type= "text/css" href="style3.css">
	<link rel="stylesheet" type= "text/css" href="style4.css">
	<link rel="stylesheet" type= "text/css" href="style5.css">
	<link rel="stylesheet" type= "text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="/js/external/jquery-1.11.0.min.js"></script>

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
			
			<li><a href="home.php" class="logout">Logout</a></li>
		</ul>
	</div>
	
<div class="split left">
  <div class="centered"> 
   <img src="antenna.svg" alt="antenna">
	<a  href="user-map.php" class="button">View Antennas</a>
  </div>
</div>

