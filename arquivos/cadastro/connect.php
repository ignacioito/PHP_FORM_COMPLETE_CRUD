<?php
try{
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=dados","root","");
	}catch(PDOException $e){
		echo $e -> getMessage();		
		}
?>