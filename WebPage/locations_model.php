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
    $label = $_GET['Label'];
    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
    $description =$_GET['description'];
    $Provider = $_GET['Provider'];
    $Techn = $_GET['Technology'];
    $Place = $_GET['Place'];
    $D1 = $_GET['Distance_1'];
    $D2 = $_GET['Distance_2'];
    $D3 = $_GET['Distance_3'];
    $D4 = $_GET['Distance_4'];
    $D5 = $_GET['Distance_5'];
    $NearestLabel = $_GET['Nearest_Label'];
    $NearestProvider = $_GET['Nearest_Provider'];
    $NearestTechnology = $_GET['Nearest_Technology'];
    $NearestDistance = $_GET['Nearest_Distance'];
    $MinTemperature = $_GET['Min_Temperature'];
    $MaxTemprature = $_GET['Max_Temprature'];
    $PeoplePopulation = $_GET['People_Population'];
    $Class = $_GET['Class'];

    // Inserts new row with place data.
    $query = sprintf("INSERT INTO completedatasetfinal " .
        " (id,Label, lon, lat, description,Provider, Technology,Place,Distance_1,Distance_2,Distance_3,Distance_4,Distance_5,
        Nearest_Label,Nearest_Provider,Nearest_Technology,Nearest_Distance,Min_Temperature,Max_Temprature,People_Population, Class) " .
        " VALUES (NULL, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');",
        mysqli_real_escape_string($con,$label),
        mysqli_real_escape_string($con,$lat),
        mysqli_real_escape_string($con,$lng),
        mysqli_real_escape_string($con,$description),
        mysqli_real_escape_string($con,$Provider),
        mysqli_real_escape_string($con,$Techn),
        mysqli_real_escape_string($con,$Place),         mysqli_real_escape_string($con,$D1), 
        mysqli_real_escape_string($con,$D2),            mysqli_real_escape_string($con,$D3), 
        mysqli_real_escape_string($con,$D4),            mysqli_real_escape_string($con,$D5), 
        mysqli_real_escape_string($con,$NearestLabel), 
        mysqli_real_escape_string($con,$NearestProvider),
        mysqli_real_escape_string($con,$NearestTechnology), 
        mysqli_real_escape_string($con,$NearestDistance), 
        mysqli_real_escape_string($con,$MinTemperature),
        mysqli_real_escape_string($con,$MaxTemprature), 
        mysqli_real_escape_string($con,$PeoplePopulation),            mysqli_real_escape_string($con,$Class), 
    );

    $result = mysqli_query($con,$query);
    echo"Inserted Successfully";
    if (!$result) {
        die('Invalid query: ' . mysqli_error($con));
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
    $query = "update completedatasetfinal set location_status = $confirmed WHERE id = $id ";
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
select id ,lat,lng,description,Provider, Technology,Place,Distance_1,Distance_2,Distance_3,Distance_4,Distance_5,
Nearest_Label,Nearest_Provider,Nearest_Technology,Nearest_Distance,Min_Temperature,Max_Temprature,People_Population, Class,location_status as isconfirmed
from completedatasetfinal WHERE  location_status = 1
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
select id ,lat,lng,description,,Provider, Technology,Place,Distance_1,Distance_2,Distance_3,Distance_4,Distance_5,
Nearest_Label,Nearest_Provider,Nearest_Technology,Nearest_Distance,Min_Temperature,Max_Temprature,People_Population, Classlocation_status as isconfirmed
from completedatasetfinal
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