<?php
include_once 'header.php';
include 'locations_model.php';
?>

    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA-AB-9XZd-iQby-bNLYPFyb0pR2Qw3orw">
    </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <div id="map"></div>
    <script>
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
          
            var lat = e.latLng.lat(); 
            var lng = e.latLng.lng(); 
            var Latitude = lat;
            var Longitude = lng;
            var markerId = getMarkerUniqueId(lat, lng); 
            var marker = new google.maps.Marker({
                position: getLatLng(lat, lng),
                map: map,
                animation: google.maps.Animation.DROP,
                id: 'marker_' + markerId,
                html: "    <div  id='info_"+markerId+"'>\n" +
                 "         <form required method='+POST+' action='Confirmation_Data.html'>\n"+
                "        <table class=\"map1\">\n" +
                "            <tr>\n" +
                "                <td><a>Description:</a></td>\n" +
                "                <td><input  id='manual_description' placeholder='Description' name='description'  title='Please enter description you want!' ></input></td></tr>\n" +

                "                <td><a>Technology:</a></td>\n" +
                "                <td><input   id='Technology' placeholder='Technology'name='Technology'></input></td></tr>\n" +
               
                "                <td><a>Coverage:</a></td>\n" +
                "                <td><input   id='Coverage' placeholder='Coverage' name='Coverage'></input></td></tr>\n" +

                "                <td><a>Traffic:</a></td>\n" +
                "                <td><input   id='Traffic' placeholder='Traffic' name='Traffic'></input></td></tr>\n" +

                "                <td><a>RSCP:</a></td>\n" +
                "                <td><input  id='rSCP' placeholder='RSCP' name='rSCP'></input></td></tr>\n" +

                "                <td><a>Ecno:</a></td>\n" +
                "                <td><input  id='Ecno' placeholder='Ecno' name='Ecno'></input></td></tr>\n" +

                "                <td><a>Cell Label:</a></td>\n" +
                "                <td><input  id='CellLabel' placeholder='Cell Label' name='CellLabel'></input></td></tr>\n" +

                "         <tr><td></td><td><input type='submit' id='SavaData' value='Save' onclick='saveData("+lat+","+lng+")'/></td></tr>\n" +
                 "        </table>\n" +
                 "</form>\n"+
                "    </div>"
            });
     
            
            window.onload = function() 
            {
                document.getElementById("SavaData").onclick = function() {
                    doWork()
                };
            }
            function doWork() {
            $.post("receiver", Latitude ,Longitude , function(){

            });
            event.preventDefault();
            }
            markers[markerId] = marker;
            bindMarkerEvents(marker); 
            bindMarkerinfo(marker);
        });     

        var bindMarkerinfo = function(marker) {
            google.maps.event.addListener(marker, "click", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); 
                var marker = markers[markerId]; 
                infowindow = new google.maps.InfoWindow();
                infowindow.setContent(marker.html);
                infowindow.open(map, marker);
               
            });
        };

        var bindMarkerEvents = function(marker) {
            google.maps.event.addListener(marker, "rightclick", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); 
                var marker = markers[markerId]; 
                removeMarker(marker, markerId); 
            });
        };

        var removeMarker = function(marker, markerId) {
            marker.setMap(null); 
            delete markers[markerId]; 
        };

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

        function saveData(lat,lng) {
            
            var description = document.getElementById('manual_description').value;
            var Technology = document.getElementById('Technology').value;
            var Coverage = document.getElementById('Coverage').value;
            var Traffic = document.getElementById('Traffic').value;
            var rSCP = document.getElementById('rSCP').value;
            var Ecno = document.getElementById('Ecno').value;
            var CellLabel = document.getElementById('CellLabel').value;
            var Latitude = lat ;
            var Longitude = lng ;

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
                    var markerId = getMarkerUniqueId(lat,lng); 
                    var manual_marker = markers[markerId];
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