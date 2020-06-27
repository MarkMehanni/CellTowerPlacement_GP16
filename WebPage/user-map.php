<?php
// session_start();
include_once 'header.php';
include 'locations_model.php';

/*html = str_get_html("<div id='demo'></div>");
$text = $html->find('div[id=demo]', 0)->innertext;
echo $text; */

/*$lat = "<div id='lat1'></div>";
echo $lat;*/


/*$lng = "<div id='lng1'></div>";
echo $lng;
$doc = new DomDocument();
$doc->loadHTML($lng); // That's the addition
$longitude = $doc->getElementById('lng1');*/
//echo floatval($longitude->textContent);
//$lat = echo "<div id='demo'></div>"; 

//include 'Nearest_Distance.php';
//get_unconfirmed_locations();exit;

?>

    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA-AB-9XZd-iQby-bNLYPFyb0pR2Qw3orw">
    </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <div id="map"></div>
    <script>
        /**
         * Create new map
         */
        var infowindow;
        var map;
        var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
        var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
        var locations = <?php get_confirmed_locations() ?>;
        var myOptions = {
            zoom: 7,
            center: new google.maps.LatLng(30.0444, 31.2357),
            mapTypeId: 'roadmap'
        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);

        var markers = {};

        var getMarkerUniqueId= function(lat, lng) {
            return lat + '_' + lng;
        };

       
        var getLatLng = function(lat, lng) {
            return new google.maps.LatLng(lat, lng);
        };
        var addMarker = google.maps.event.addListener(map, 'click', function(e) {
            // var Array = [];
            var lat = e.latLng.lat(); // lat of clicked point
            var lng = e.latLng.lng(); // lng of clicked point

            var Latitude = lat;
            var Longitude = lng;
            //document.getElementById("lat1").innerHTML = Latitude;
            //document.getElementById("lng1").innerHTML = Longitude;

           
            // var ourObj = {};
            // ourObj.data = "Some Data Points";
            // ourObj.Magnitude = [{'lat':Latitude, 'lng': Longitude}];
            // $.ajax({
            //     url:"Nearest_Distance.php",
            //     method:"post",
            //     data: {points: JSON.stringify(ourObj) } ,
            //     success: function(Result)
            //     {
            //         console.log(Result);
            //     }

            // })
        
     

            var markerId = getMarkerUniqueId(lat, lng); // an that will be used to cache this marker in markers object.
            var marker = new google.maps.Marker({
                position: getLatLng(lat, lng),
                map: map,
                animation: google.maps.Animation.DROP,
                id: 'marker_' + markerId,
                html: "    <div  id='info_"+markerId+"'>\n" +
                 "         <form  method='+POST+' action='Confirmation_Data.html'>\n"+
                "        <table class=\"map1\">\n" +
                "            <tr>\n" +
                "                <td><a>Description:</a></td>\n" +
                "                <td><textarea id='manual_description' placeholder='Description' name='description' ></textarea></td></tr>\n" +

                "                <td><a>Technology:</a></td>\n" +
                "                <td><textarea  id='Technology' placeholder='Technology'name='Technology'></textarea></td></tr>\n" +
               
                "                <td><a>Coverage:</a></td>\n" +
                "                <td><textarea  id='Coverage' placeholder='Coverage' name='Coverage'></textarea></td></tr>\n" +

                "                <td><a>Traffic:</a></td>\n" +
                "                <td><textarea  id='Traffic' placeholder='Traffic' name='Traffic'></textarea></td></tr>\n" +

                "                <td><a>RSCP:</a></td>\n" +
                "                <td><textarea  id='rSCP' placeholder='RSCP' name='rSCP'></textarea></td></tr>\n" +

                "                <td><a>Ecno:</a></td>\n" +
                "                <td><textarea  id='Ecno' placeholder='Ecno' name='Ecno'></textarea></td></tr>\n" +
                "                <td><a>Cell Label:</a></td>\n" +
                "                <td><textarea  id='CellLabel' placeholder='Cell Label' name='CellLabel'></textarea></td></tr>\n" +
                "         <tr><td></td><td><input type='submit' id='SavaData' value='Save' onclick='saveData("+lat+","+lng+")'/></td></tr>\n" +
                 "        </table>\n" +
                 "</form>\n"+
                "    </div>"
            });
     
            
            window.onload = function() 
            {
                // setup the button click
                document.getElementById("SavaData").onclick = function() {
                    doWork()
                };
            }
            function doWork() {
                // ajax the JSON to the server
            $.post("receiver", Latitude ,Longitude , function(){

            });
                // stop link reloading the page
            event.preventDefault();
            }
            markers[markerId] = marker; // cache marker in markers object
            bindMarkerEvents(marker); // bind right click event to marker
            bindMarkerinfo(marker); // bind infowindow with click event to marker open info data to enter
        });
      


        /**
         * Binds  click event to given marker and invokes a callback function that will remove the marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
         */
        var bindMarkerinfo = function(marker) {
            google.maps.event.addListener(marker, "click", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                infowindow = new google.maps.InfoWindow();
                infowindow.setContent(marker.html);
                infowindow.open(map, marker);
                // removeMarker(marker, markerId); // remove it
            });
        };

        /**
         * Binds right click event to given marker and invokes a callback function that will remove the marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
         */
        var bindMarkerEvents = function(marker) {
            google.maps.event.addListener(marker, "rightclick", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                removeMarker(marker, markerId); // remove it
            });
        };

        /**
         * Removes given marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that will be removed.
         * @param {!string} markerId Id of marker.
         */
        var removeMarker = function(marker, markerId) {
            marker.setMap(null); // set markers setMap to null to remove it from map
            delete markers[markerId]; // delete marker instance from markers object
        };


        /**
         * loop through (Mysql) dynamic locations to add markers to map.
         */
        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon :   locations[i][10] === '1' ?  red_icon  : purple_icon,
                html: "<div>\n" +
                "<table class=\"map1\">\n" +
                "<tr>\n" +
                "<td><a>Description:</a></td>\n" +
                "<td><textarea disabled id='manual_description' placeholder='Description'>"+locations[i][3]+"</textarea></td></tr>\n" +
                "</table>\n" +
                "</div>"
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow = new google.maps.InfoWindow();
                    confirmed =  locations[i][10] === '1' ?  'checked'  :  0;
                    $("#confirmed").prop(confirmed,locations[i][10]);
                    $("#id").val(locations[i][0]);
                    $("#description").val(locations[i][3]);
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }

        /**
         * SAVE save marker from map.
         * @param lat  A latitude of marker.
         * @param lng A longitude of marker.
         */
        function saveData(lat,lng) {
            
            var description = document.getElementById('manual_description').value;
            var Technology = document.getElementById('Technology').value;
            var Coverage = document.getElementById('Coverage').value;
            var Traffic = document.getElementById('Traffic').value;
            var rSCP = document.getElementById('rSCP').value;
            var Ecno = document.getElementById('Ecno').value;
            var CellLabel = document.getElementById('CellLabel').value;
            // var Distance = document.getElementById('Distance').value;
            var Latitude = lat ;
            var Longitude = lng ;

            // alert(Longitude );
            // alert(Latitude );

            var ourObj = {};
            ourObj.data = "Some Data Points";
            ourObj.Magnitude = [{'lat':Latitude, 'lng': Longitude}];
            $.ajax({
                url:"Nearest_Distance.php",
                method:"post",
                data: {points: JSON.stringify(ourObj) } ,
                success: function(Result)
                {
                    console.log(Result);
                }
            });
            
            

            var url = 'locations_model.php?add_location&description=' + description + '&lat=' + lat + '&lng=' + lng 
                                                                      + '&Technology=' + Technology + '&Coverage=' + Coverage 
                                                                      + '&Traffic=' + Traffic + '&rSCP=' + rSCP + '&Ecno=' 
                                                                      + Ecno + '&CellLabel=' + CellLabel ;
                                                     

            downloadUrl(url, function(data, responseCode) {
                if (responseCode === 200  && data.length > 1) {
                    var markerId = getMarkerUniqueId(lat,lng); // get marker id by using clicked point's coordinate
                    var manual_marker = markers[markerId]; // find marker
                    manual_marker.setIcon(purple_icon);
                    infowindow.close();
                    infowindow.setContent("<div style=' color: purple; font-size: 25px;'> Waiting for admin confirm!!</div>");
                    infowindow.open(map, manual_marker);

                }else{
                    console.log(responseCode);
                    console.log(data);
                    infowindow.setContent("<div style='color: red; font-size: 25px;'>Inserting Errors</div>");
                }
            });
            //header("Location:hoopa.php");
        }

        function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    callback(request.responseText, request.status);
                }
            };

            request.open('GET', url , true);
            request.send(null);
        }


    </script>
    


<?php
include_once 'footer.php';
?>