<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cell Tower</title>
    <meta name="keywords" content="Example, Example2"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="css/all.css">
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
<!--<script-->
<!--  src="https://code.jquery.com/jquery-3.4.1.min.js"-->
<!--  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="-->
<!--  crossorigin="anonymous"></script>-->
  <script type="text/javascript" src="js/external/jquery-1.11.0.min.js"></script>

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
    <div class="wrapper">
<div class="sidebar" id="sidebar">
  <div class="menu-button" id="menu-button">
    <div class="menu-button-line"></div>
    <div class="menu-button-line"></div>
    <div class="menu-button-line"></div>
  </div>
  <a href="./"><div class="button"><i class="fas fa-home"></i>Home</div></a>
  <a href="./admin-map.php"><div class="button"><i class="fas fa-binoculars"></i>view antennas</div></a>
  <a href="../Add_Engineer/index.php"><div class="button"><i class="fas fa-user-plus"></i>Add Engineer</div></a>
  <a href="http://127.0.0.1:5000/"><div class="button"><i class="fas fa-broadcast-tower"></i>test</div></a>
  

</div>
<div class="main-body" id="main-body">
  <div class="container">
