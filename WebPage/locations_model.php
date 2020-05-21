<?php
require("db.php");

// Gets data from URL parameters.
if(isset($_GET['add_location'])) {
    add_location();
}
if(isset($_GET['confirm_location'])) {
    confirm_location();
}




function add_location(){
    $con=mysqli_connect ("localhost", 'root', '','demo');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
    echo $lat ;
    getsClosest($lng , $lat);
    $description =$_GET['description'];
    // Inserts new row with place data.
    $query = sprintf("INSERT INTO locations " .
        " (id, lat,lng,  description) " .
        " VALUES (NULL, '%s', '%s', '%s');",
        mysqli_real_escape_string($con,$lat),
        mysqli_real_escape_string($con,$lng),
        mysqli_real_escape_string($con,$description));

    $result = mysqli_query($con,$query);
    echo"Inserted Successfully";
    if (!$result) {
        die('Invalid query: ' . mysqli_error($con));
    }
}



function Add_Distance()
{
    $con=mysqli_connect ("localhost", 'root', '','demo');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
    echo $lat ;
    // Inserts new row with place data.
    $query = sprintf("INSERT INTO distances " .
        " ( lat,lng ) " .
        " VALUES ( '%s', '%s');",
        mysqli_real_escape_string($con,$lat),
        mysqli_real_escape_string($con,$lng));

    $result = mysqli_query($con,$query);
    echo"Inserted Successfully";
    if (!$result) {
        die('Invalid query: ' . mysqli_error($con));
    }
}


function getsClosest($lon1 , $lat1)
{ 
    $con=mysqli_connect ("localhost", 'root', '','demo');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }

 $sql = "SELECT 'id','lat', 'lng' FROM locations";

 $milesarray=array();
 if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_array($result))
        {
      $theta = $lon1 - is_numeric($row['lng']);
    $dist = sin(deg2rad($lat1)) * sin(deg2rad(is_numeric($row['lat'])) +  cos(deg2rad($lat1)) * cos(deg2rad(is_numeric($row['lat'])) * cos(deg2rad($theta))));
      $dist = acos($dist);
      $dist = rad2deg($dist);
      $miles = $dist * 60 * 1.1515;
      array_push($milesarray,$miles);
        }
       $Nearest = min($milesarray);
       echo $Nearest;
    }
}
}

function confirm_location(){
    $con=mysqli_connect ("localhost", 'root', '','demo');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    $id =$_GET['id'];
    $confirmed =$_GET['confirmed'];
    // update location with confirm if admin confirm.
    $query = "update locations set location_status = $confirmed WHERE id = $id ";
    $result = mysqli_query($con,$query);
    echo "Inserted Successfully";
    if (!$result) {
        die('Invalid query: ' . mysqli_error($con));
    }
}
function get_confirmed_locations(){
    $con=mysqli_connect ("localhost", 'root', '','demo');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    // update location with location_status if admin location_status.
    $sqldata = mysqli_query($con,"
select id ,lat,lng ,description,location_status as isconfirmed
from locations WHERE  location_status = 1
  ");

    $rows = array();

    while($r = mysqli_fetch_assoc($sqldata)) {
        $rows[] = $r;

    }

    $indexed = array_map('array_values', $rows);
    //  $array = array_filter($indexed);

    echo json_encode($indexed);
    if (!$rows) {
        return null;
    }
}
function get_all_locations(){
    $con=mysqli_connect ("localhost", 'root', '','demo');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    // update location with location_status if admin location_status.
    $sqldata = mysqli_query($con,"
select id ,lat,lng,description,location_status as isconfirmed
from locations
  ");

    $rows = array();
    while($r = mysqli_fetch_assoc($sqldata)) {
        $rows[] = $r;

    }
  $indexed = array_map('array_values', $rows);
  //  $array = array_filter($indexed);

    echo json_encode($indexed);
    if (!$rows) {
        return null;
    }
}
function array_flatten($array) {
    if (!is_array($array)) {
        return FALSE;
    }
    $result = array();
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, array_flatten($value));
        }
        else {
            $result[$key] = $value;
        }
    }
    return $result;
}

?>