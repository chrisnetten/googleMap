<?php 
  include 'db.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <script src="javascript/map.js" type="text/javascript"></script>
  </head>
  <body>
    <div id="map"></div>
    
    <h1 style="text-align: center">Add a Contact</h1>

<main class="jumbotron">

<div class="container">
	
    <div class="row">
       <div class="col-sm-4">
        <form method="post">
            <fieldset class="form-group">
                <label for="name">Name: *</label>
                <input name="name" type="text" class="form-control" required autofocus />
            </fieldset>
             <fieldset class="form-group">
                <label for="lat">Latitude: *</label>
                <input name="lat" type="text" class="form-control" required autofocus />
            </fieldset>
             <fieldset class="form-group">
                <label for="lng">Longitude: *</label>
                <input name="lng" type="text" class="form-control" required autofocus />
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
 