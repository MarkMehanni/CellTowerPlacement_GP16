
<?php
include 'locations_model.php';
if (isset($_POST["points"])) 
{
       $points = json_decode($_POST["points"]);
       $Latitude = $points->Magnitude[0]->lat ; 
       $Longitude =  $points->Magnitude[0]->lng;      

      //  $Desc = $points->Magnitude[0]->Desc ; 
      //  $Technology =  $points->Magnitude[0]->Tech;

       echo $Latitude . " previous was latitude , KHARRRRAAAAA Bel Kousbarraaaaa " . $Longitude  ." Space fasddsyyyyy  ";   
      //  echo '<input type="hidden" value="' . htmlspecialchars($Latitude) . '" />'."\n"; 
      //  echo '<input type="hidden" value="' . htmlspecialchars($Longitude) . '" />'."\n";
      //  echo '<input type="hidden" value="' . htmlspecialchars($Desc) . '" />'."\n"; 
      //  echo '<input type="hidden" value="' . htmlspecialchars($Technology) . '" />'."\n";     
       $Nearest = getsClosest($Latitude ,  $Longitude);
       $_SESSION['Nearest_Distance'] =serialize( $Nearest);
      //  echo $Nearest;
      // echo "Nearest distance" . $Nearest ;
      echo unserialize($_SESSION['Nearest_Distance'] );
//       $xx = "<script>
//       var ourObj = {};
//        ourObj.data = 'Some Data Points';
//        ourObj.Distance = [{'Nearest':Nearest}];
//        $.ajax({
//            url:'user-map.php',
//            method:'post',
//            data: {points: JSON.stringify(ourObj) } ,
//            success: function(Result)
//            {
//                console.log(Result);
//            }
//        })
//  </script>";
 
   }
    ?> 
      