<?php 
	require 'db.php';
	
	$qry = "INSERT INTO user ( name, lat, lon)
VALUES ( '$name' , '$lat' ,'$lng')";
	
	$statement = $db_Object->prepare($qry);
	$statement->execute();
	$statement->closeCursor();
	

include('index.php');
?>