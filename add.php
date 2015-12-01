<?php 
	require('db.php');
	
$name=$_POST['name']; 
$lat=$_POST['lat'];  
$lng=$_POST['lng']; 

	$qry = "INSERT INTO user (name, lat, lng) VALUES ('$name' , '$lat' , '$lng')";
	
	$statement = $db_Object->prepare($qry);
	$statement->execute();
	$statement->closeCursor();

include('index.php');
?>