<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cell Tower</title>
    <meta name="keywords" content="Example, Example2"/>
	<link rel="stylesheet" type= "text/css" href="../CellTowerPlacement_GP16/style3.css">
	<link rel="stylesheet" type= "text/css" href="../CellTowerPlacement_GP16/style4.css">
	<link rel="stylesheet" type= "text/css" href="../CellTowerPlacement_GP16/style5.css">
	<link rel="stylesheet" type= "text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
<!--<script-->
<!--  src="https://code.jquery.com/jquery-3.4.1.min.js"-->
<!--  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="-->
<!--  crossorigin="anonymous"></script>-->
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
			<a href="home.php" class="logo">CTP monitor <img class="lemon" src="/CellTowerPlacement_GP16/CellTower2.svg"></a>
		</h1>
		<ul>
			
			<li><a href="home.php" class="logout">Logout</a></li>
		</ul>
	</div>
	
<div class="split left">
  <div class="centered"> 
   <img src="antenna.svg" alt="antenna">
	<a  href="./user-map.php" class="button">View Antennas</a>
  </div>
</div>

<div  class="split right">
  <div class="centered">
    <img src="antenna2.svg" alt="antenna">
	<a href="http://127.0.0.1:5000/" class="button">Test</a>
	
  </div>
</div>