﻿<html>
  <head> <title>Addition, soustraction ou multiplication de 2 nombres</title> 

</head>
  <body>
	<?php
  	$nbre1=$_GET['nb1'];
 		$nbre2=$_GET['nb2'];
  	$op=$_GET['op'];

		switch($op){
			case "somme":
					$res = $nbre1+$nbre2;
					echo "<H1> Addition de 2 nombres</H1>";
					echo "<p>".$nbre1." + ".$nbre2." = ".$res."</p>";
				break;
			case "sous":
					$res=$nbre1-$nbre2;
					echo "<H1> Différence de 2 nombres</H1>";
					echo "<p>".$nbre1." - ".$nbre2." = ".$res."</p>";
				break;
			// TP 4 Exercice 1.4 =========
			case "mult":
					$res=$nbre1*$nbre2;
					echo "<H1> Multiplication de 2 nombres</H1>";
					echo "<p>".$nbre1." x ".$nbre2." = ".$res."</p>";
				break;
			default:
				echo "Bad operator name : $op \n";
				break;
		}

		echo "<a href='".$_SERVER['HTTP_REFERER']."'><< Retour au formulaire</a>";
	?>
</body>
</html>