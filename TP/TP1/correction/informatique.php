<html>
<head>
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>TP1</title>
</head>
<body>
<?php 

    // TP 2 Exercice 3 =============================================    
    function maj ($chaine) // passage de parametre par reference
    {
             return strtoupper($chaine);
    }
 
   // TP 1 : Exercice 2.2 ============================================
   $tableauAssoc = array ("lundi"=>"Pas cours d'informatique!", 
                          "mardi"=>"Pas cours d'informatique!",
                          "mercredi"=>"Pas cours d'informatique!",
                          "jeudi"=>"Cours d'informatique!",
                          "vendredi"=>"Cours d'informatique!",
                          "samedi"=>"Pas cours d'informatique!",
                          "dimanche"=>"Pas cours d'informatique!");


   /* Pour parcourir le tableau associatif */
   foreach ($tableauAssoc as $cle => $valeur)
   {
       echo " Le  $cle, j'ai $valeur <br/>";
   }
   
    // TP 1 : Exercice 2.2  version tableau html ============================================
    echo "<table border=\"1\">\n";
    echo "<tr><th>Jour</th><th>enseignement</th></tr>";
     foreach ($tableauAssoc as $cle => $valeur)
   {
       echo "<tr><td>$cle</td><td>$valeur</td></tr>\n";
   }
   echo "</table>\n";


   // TP 1 : Exercice 2.3 =============================================
   
   
   date_default_timezone_set('Europe/Paris');
   $jour = date("N");
   $date = date("d-m-Y");
   
   $tableauAssocDate = array (1=>"Pas cours d'informatique!", 
                              2=>"Pas cours d'informatique!",
                              3=>"Pas cours d'informatique!",
                              4=>"Cours d'informatique!",
                              5=>"Cours d'informatique!",
                              6=>"Pas cours d'informatique!",
                              7=>"Pas cours d'informatique!");
   

    echo "Bonjour, nous sommes le " . $date . ", " .  $tableauAssocDate[$jour] . "<br/>"; 
   // 1: lundi, 2 : mardi, 3: mercredi, 4 : jeudi, 5 : vendredi
   // Nous avons cours d'info les jeudis et les vendredis
   if ($jour == 4 || $jour == 5)  {
       echo "Vous avez cours d'informatique aujourd'hui!";
   }
 
   
?>


</body>
</html>
