<html>
	<head>

	<head>
		<body>
			<?php 
			if (isset($_POST['pass']))
			{
				if($_POST['pass']=="peace")
				{
					echo "voici les codes secret : <br /> AZERTY <br /> QSDFGH <br /> WXCVBN" ;
				}
				else 
				{
					echo "Mauvais MOT DE PASSE !!" ;
				}
			}
			else
			{
				echo "vous n'avez entrer aucun mot de passe !" ;
				
			}
			?>


		</body>
</html>
