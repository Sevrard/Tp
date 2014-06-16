<html>
<head>

</head>
<body>
	
	<form name="minichat" method="post" action="cible_minichat.php" >
		Entrer votre nom :
		<input type="text" size="50" maxlenght="250" name="nom"/>
		</br>
		Message :
		<input type="text" size="50" maxlenght="250" name="mess"/>
		</br>
		<input type="submit" value="Envoi" />
	</form>

<?php 
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
	}
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}

	$requete = $bdd->query('SELECT pseudo ,message FROM chat ORDER BY  id desc LIMIT 0, 10') ;
	while($donnees=$requete->fetch())
	{
		 echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
	}
	$requete->closecursor(); 
	?>

</body>
</html>