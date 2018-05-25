<html>
  <head>
    <title>Films</title>
  </head>
  <body>
    <h1>FILMS</h1>
    <p>
      Ce formulaire vous permet de rechercher les films <b>par leur genre</b>
    </p>
    <?php
      require("connect.php");
      $connexion = mysqli_connect(SERVEUR, NOM, PASSE);
      if(!$connexion){
          echo "pas de connexion!";
      }
      if(!mysqli_select_db($connexion,BASE)){
          echo "Erreur!";
      }
      /* création de la requete */
      $genres="SELECT distinct(Genre) 
                FROM Films; ";

    ?>

    <form method="POST" action="listeDesFilms.php"> 
      <label for="Genre">Quel genre ? </label> 
      <input list="genres" type="text" id="genre" name="Genre">
      <datalist id="genres">
        <?php
              $resultat =  mysqli_query($connexion,$genres);
              $options="";
              while ($genre = mysqli_fetch_object ($resultat)) {
                echo "<option value='".$genre->Genre."'>".$genre->Genre."</option>\n";
              }
        ?>
      </datalist>	
      <br/>
      <input type="submit" value="Envoyer" name="B1"/>
      <input type="reset" value="RAZ" name="B2"/>
    </form>
  </body>
  </html>