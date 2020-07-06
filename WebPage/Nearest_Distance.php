<?php
include 'locations_model.php';
 if (isset($_POST["points"])) 
{
       $points = json_decode($_POST["points"]);
       $Latitude = $points->Magnitude[0]->lat ; 
       $Longitude =  $points->Magnitude[0]->lng;      

       echo $Latitude . "  latitude  " . $Longitude  ." Longitude  ";      
       $Nearest = getsClosest($Latitude ,  $Longitude);
   }
    ?> 