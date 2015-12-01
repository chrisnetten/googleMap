
<?php

	$dsn='mysql:host=sql.computerstudi.es;dbname=gc200230280';
	$username='gc200230280';
	$password='zRTnxgCx';
	
	try
	{
		$db_Object=new PDO($dsn,$username,$password);
		echo 'Database Connection Success';
	}
	catch(PDOException $e)
	{
		echo 'There was a problem connecting to the database. Please verify your settings' ;
		echo $e->getMessage();
	}

?>