<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '') ;
	}
	catch (Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

	$req=$bdd->prepare('INSERT INTO chat (pseudo,message) VALUES (?,?)') ;
	$req->execute (array($_POST['nom'],$_POST['mess'])) ;

	header('Location: minichat.php');

?>