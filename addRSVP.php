<?php

addRSVP($_POST[name],$_POST[email],$_POST[attending],$_POST[persons],$_POST[veg]);

function query_Executor($query){
	include "includes/creds.php";
	try{
		$pdoConfigString = "mysql:host=" . $db_host . ";dbname=" . $db_name . ";charset=utf8";

		$conn = new PDO($pdoConfigString, $db_username, $db_password);

		$stmt = $conn -> prepare($query);
		$stmt -> execute();

		return $stmt -> fetch();

	}
	catch (PDOException $e){
		echo "Exception" . $e;
	}
}
// $data = query_Executor('SELECT Name FROM weddingDB.Wishes WHERE idWishes="0"')

function addRSVP($name,$email,$attending,$persons,$food){
	query_Executor("INSERT INTO `weddingDB`.`RSVP` (`Name`,`Attending`,`Food`,`email`,`persons`) VALUES ('". $name ."','" . $attending . "','". $food ."',
			'". $email ."','". $persons ."');");
	echo "<script>console.log('". $persons ."');</script>";
}

?>
