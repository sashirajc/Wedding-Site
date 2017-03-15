<?php

// $name = $_POST["name"];
// $wish = $_POST["wish"];

addWish($_POST[name],$_POST[wish]);

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


function addWish($name,$wish){
    $time_created = date("Y-m-d H:i:s");
	query_Executor("INSERT INTO `weddingDB`.`Wishes` (`Name`, `Wishes`,`wishes_dt`) VALUES ('". $name ."', '" . $wish . "','" . $time_created . "');");
}
?>
