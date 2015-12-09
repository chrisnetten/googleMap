<?php 
  require('db.php');
?>

<!DOCTYPE html>
<html>
  <head>
      
       <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      
      
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">   
     
       <!-- Latest   jQuery -->
      <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  
      <!-- Latest compiled and minified   JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
      
      
    <script src="map.js" type="text/javascript"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&language=en"></script>
  </head>
  <body>

<?php
		

$result = mysql_db_query("Select * FROM user");

$result = array();

while($row = $db->database_fetch_assoc($query))
{
    $data[] = $row;
}
		?>
  <script>
          
        function initializeMap() {
          
         
        
          var mapOptions = {
            zoom: 8,
            center: new google.maps.LatLng(44.394086, -79.692675),
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
       var  map = new google.maps.Map(document.getElementById('map'),mapOptions);
       
       
          for(var i = 0; i < $data.length; i++) {
                 var myLatlng = new google.maps.LatLng($data[i].lat, $data[i].lng);
                         var marker = new google.maps.Marker({
                         position: myLatlng
                         
                          });
                           marker.setMap(map);

   
                         marker.addListener('click', function() {
                           
                                
                                infowindow.open(map, marker);
                               marker.setAnimation(google.maps.Animation.BOUNCE);
                             
                          });
          
                         var infowindow = new google.maps.InfoWindow({
                          content: name
                          });
          } 
          
        
            
      
        }
         
    
         
        google.maps.event.addDomListener(window, 'load', initializeMap);
        

          
      </script>
     <div class="jumbotron">
    <div id="map" style="width: 100%; height: 500px;"></div>
    </div>
    
    <h1 style="text-align: center">Add a Contact</h1>

<main class="jumbotron">

<div class="container">
	
    <div class="row">
       <div class="col-sm-4">
        <form action="add.php" method="post">
            <fieldset class="form-group">
                <label for="name">Name: *</label>
                <input name="name" type="text" class="form-control" required autofocus />
            </fieldset>
             <fieldset class="form-group">
                <label for="lat">Latitude: *</label>
                <input name="lat" type="text" class="form-control" required  />
            </fieldset>
             <fieldset class="form-group">
                <label for="lng">Longitude: *</label>
                <input name="lng" type="text" class="form-control" required  />
            </fieldset>
            <fieldset class="form-group text-right">
                <input type="submit" class="btn btn-success" value="Submit"/>
            </fieldset>
        </form>
    </div>
  </div>
 </div>
</main>
  </body>
 </html>
 