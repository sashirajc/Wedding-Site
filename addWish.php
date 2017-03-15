<?php

$name = $_POST["name"];
$wish = $_POST["wish"];

addWish($name,$wish);

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
	query_Executor("INSERT INTO `weddingDB`.`Wishes` (`Name`, `Wishes`) VALUES ('". $name ."', '" . $wish . "');");
}
?>
