<?php
try{
	$pdo = new PDO("mysql:host=localhost;dbname=ongresgatando_bdcadastro","ongresgatando_uscadastro","teste45321*");
	}catch(PDOException $e){
		echo $e -> getMessage();		
		}
?>