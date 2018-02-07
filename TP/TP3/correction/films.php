<html>
<head>
<title>TP3 - Corrige</title>
</head>
<body>
<?php 
   require("connect.php");
   $connexion = mysqli_connect(SERVEUR,NOM,PASSE);
   if (!$connexion) {
	     echo "Desolé, connexion au serveur impossible\n";
    	     exit;
   } else
   if (!mysqli_select_db($connexion,BASE)) {
    	     echo "Désolé, accès à la base impossible\n";
    	     exit;
   } else  {
             // Exercice 2.3 Tous les films--------------------------------------------------------------------
             echo "<h2>Films </h2>"; 
             $films = "SELECT NumFilm, Nom, Prenom, Titre, Genre, Annee 
                            FROM Films F, Individus I 
                            WHERE F.NumInd = I.NumInd";

            $resultat =  mysqli_query($connexion,$films);
            if ($resultat)  {
                echo "<table border=1>";
                echo "<caption>Films</caption>";
                echo "<thead> <th>NumFilm</th><th>Titre</th><th>Nom</th><th>Prenom</th></thead>";
                echo "<tbody>";
                while ($res = mysqli_fetch_object ($resultat)) {
                    echo "<tr>";  
                    echo "<td>" . $res->NumFilm . "</td><td>" . $res->Titre . "</td><td>" . $res->Nom . "</td><td>" . $res->Prenom . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                    echo "Pas de resultat !\n";
            }
             // Exercice 2.4 Films dramatiques--------------------------------------------------------------------
             echo "<h2>Films dramatiques</h2>"; 

             $dramatiques = $films . " and Genre like 'Drame'";
			 
			 $resultat =  mysqli_query($connexion,$dramatiques);
             if ($resultat)  {
                 echo "<table border=1>";
                 echo "<caption>Films dramatiques</caption>";
                 echo "<thead> <th>NumFilm</th><th>Titre</th><th>Nom</th><th>Prenom</th></thead>";
                 echo "<tbody>";
                 while ($res = mysqli_fetch_object ($resultat)) {
                        echo "<tr>";  
                        echo "<td>" . $res->NumFilm . "</td><td>" . $res->Titre . "</td><td>" . $res->Nom . "</td><td>" . $res->Prenom . "</td>";
                        echo "</tr>";
                 }
                 echo "</tbody>";
                 echo "</table>";
             } else {
                        echo "Pas de resultat !\n";
             }
			 // Exercice 2.5 Nombre de films par genre --------------------------------------------------------------------
            echo "<h2>Nombre de films par genre</h2>";
            
            $filmspargenre = "SELECT Genre, count(*) AS Nb 
                                FROM Films 
                                GROUP BY Genre";

            $resultat =  mysqli_query($connexion,$filmspargenre);
            if ($resultat)  {
                echo "<table border=\"1\">";
                echo "<caption>Nombre de films par genre</caption>";
                echo "<thead> <th>Genre</th><th>Nombre</th></thead>";
                echo "<tbody>";
                while ($res = mysqli_fetch_object ($resultat)) {
                    echo "<tr>";  
                    echo "<td>" . $res->Genre . "</td><td>" .  $res-> Nb . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                    echo "Pas de resultat !\n";
            }
            // Exercice 3 --------------------------------------------------------------------
            echo "<h2>Acteurs</h2>";
            
			$nbfilms = "SELECT NumInd, count(*) AS Nb 
                            FROM Acteurs 
                            GROUP BY NumInd ";
             $resultat =  mysqli_query($connexion,$nbfilms);
            if ($resultat)  {
                echo "<table border=\"1\">";
                echo "<caption>Nombre de films par acteurs</caption>";
                echo "<thead> <th>NumInd</th><th>NbFilms</th></thead>";
                echo "<tbody>";
                while ($res = mysqli_fetch_object ($resultat)) {
                    echo "<tr>";  
                    echo "<td>" . $res->NumInd . "</td><td>" . $res->Nb . "</td>";
                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
            } else {
                    echo "Pas de resultat !\n";
            }


			$nbfilmsdrama = "SELECT Acteurs.NumInd, nom, prenom, count(*) AS Nb 
                            FROM Individus, Acteurs, Films 
                            WHERE Individus.NumInd=Acteurs.NumInd 
                            AND Acteurs.NumFilm=Films.NumFilm
                            AND Genre='Drame'
                            GROUP BY Acteurs.NumInd ";
                
             $resultat =  mysqli_query($connexion,$nbfilmsdrama);
             if ($resultat)  {
                 echo "<table border=\"1\">";
                 echo "<caption>Nombre de films dramatiques par acteurs</caption>";
                 echo "<thead> <th>NumInd</th><th>Nom</th><th>Prenom</th><th>Nombre</th></thead>";
                 echo "<tbody>";
                 while ($res = mysqli_fetch_object ($resultat)) {
                        echo "<tr>";  
                        echo "<td>" . $res->NumInd . "</td><td>" .  $res->nom . "</td><td>" .  $res->prenom . "</td><td>" .  $res->Nb . "</td>";
                        echo "</tr>";
                 }

                 echo "</tbody>";
                 echo "</table>";
             } else {
                        echo "Pas de resultat !\n";
             }
  }
?>
</body>
</html>
