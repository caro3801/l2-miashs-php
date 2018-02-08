<html>
<head>
<title>Résultat de la recherche par formulaire</title>
</head>
<body>

<?php
	// TP 4 Exercice 3 Q2 : Ajout du test : *  =========
	if (isset($_POST['Genre']) && $_POST['Genre']!="*") {
	  $Genre=$_POST['Genre'];
	}
	else { 
      $Genre="";
	};
	require("connect.php");
	/* création de la requete */
	$requete="SELECT NumFilm, Titre FROM Films";
	if (!empty($Genre))  $requete=$requete." WHERE upper(Genre) Like upper(\"%$Genre%\") ";
	
	/* exécution de la requete */
	$connexion = mysqli_connect(SERVEUR, NOM, PASSE);
	if(!$connexion){
        echo "pas de connexion!";
    }
    if(!mysqli_select_db($connexion,BASE)){
        echo "Erreur!";
    }
	
	/* récupération du nombre de lignes dans le résultat */
	/*$nbLignes = $res->num_rows;
	
	/* affichage du titre */
	if (!empty($Genre))  {
		echo "<h2>Les films du genre \"$Genre\" ";
		/*($nbLignes) */
		echo "</h2>";
	}
	// TP 4 Exercice 2 Q3 =========
	else { 
		echo "<h2>Tous les films ";
		/*($nbLignes) */
		echo "</h2>";
	};
	/* exécution de la requête */
	/* echo $requete ; */
	$resultat =  mysqli_query($connexion,$requete);
	
	/* affichage des films sous forme d'une liste à puce*/
	
	if ($resultat)  {
		echo "<ul>";
		while ( $film = mysqli_fetch_object ($resultat) ) {
			echo "<li>".$film->NumFilm." - " . $film->Titre."</li>";
		} ;
		echo "</ul>";
	} 
	else {
         echo "Pas de film de ce genre !\n";
    }
	
?>
</body>
</html>
