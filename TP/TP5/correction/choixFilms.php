<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

if(!isset($_SESSION['genrePref'])){
    $_SESSION['genrePref'] = '*';
}
$genrePref=$_SESSION['genrePref'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body><h1 >FILMS</h1>
    <p>
      Ce formulaire vous permet de rechercher les films <b>par leur genre</b>
    </p>
    <p>
        <?php
            if ($genrePref != "*")  
            {
                echo "<p>Votre dernier choix : <b>".$genrePref."</b></option>\n";
            }
        ?>
        <?php
				require_once("connect.php");

				/* recherche des genres de films */
		
				$connexion = mysqli_connect(SERVEUR, NOM, PASSE);
				if(!$connexion){
					echo "pas de connexion!";
				}
				if(!mysqli_select_db($connexion,BASE)){
					echo "Erreur!";
				}
			
				/* exécution de la requête */
				$genres = "SELECT distinct Genre FROM Films;";
				$resultat = mysqli_query($connexion,$genres);
		?>
        <form method="POST" action="listeDesFilms.php">
            <label for="Genre">Quel genre ? </label>
            <input list="genres" type="text" id="genre" name="Genre" value="<?=$genrePref?>">
            <datalist id="genres">
                <?php
                            $resultat =  mysqli_query($connexion,$genres);
                            $options="";
                            while ($genre = mysqli_fetch_object ($resultat)) {
                                echo "<option value='".$genre->Genre."'>".$genre->Genre."</option>\n";
                            }
                ?>
            </datalist>
		

        
            <input type="submit" value="Envoyer" name="B1"/>
            <input type="reset" value="RAZ" name="B2"/>
        </form>
        </p>
        <p>
            <a href="listeDesFilms.php">Lien vers listeDesFilms.php</a>
        </p>
    </body>
</html>