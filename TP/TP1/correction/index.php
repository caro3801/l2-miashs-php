<html>
<head>
  <!-- <link rel="stylesheet" type="text/css" href="style.css">-->
   <title>TP1</title>
</head>
<body>
<!-- Exercices 1.1-1.3 -->
<?php
   date_default_timezone_set('Europe/Paris');
   $date = date("d-m-Y");
   echo "Bonjour, nous sommes le " . $date; 
?>

<!--
  Si on visualise le contenu de ce fichier en local (fichier enregistré sur votre disque dur,
  rien n'est affiché parce que il faut un interpretateur PHP.
  Vous devez transferer ce fichier sur le serveur. 
-->

<!-- Exercice 1.5 -->
<?php
   $date = date("d-m-Y");
   echo "<h4> Bonjour, nous sommes le " . $date . "</h4>"; 
?>

<!-- Exerice 1.6 -->
<!--
      Dans le .css, il fault modifier les proprietes de la balise h4 (voir fichier style.css).
      Vous devez enlever le commentaire dans le head de cette page pour prendre en compte les definitions de style.
-->

<!-- Exercice 1.7 suprimme nous n'avons pas encore fait les fonctions 
<?php
    function chaineDate ($arg1)
    {
             $date = date("d-m-Y"); 
             $chaine = $arg1 . $date;
             return $chaine;
    }
 
    echo "<h4>" . chaineDate("Bonjour, nous sommes le (avec fonction)") . "</h4>"; 
?>
-->

<!-- Exercice 3.1 -->
<?php
    $date = date("d-m-Y"); 
    echo "<h4>Nous sommes le " . "<a href=\"informatique.php\">". $date . "</a>" . "</h4>"; 
?>

<!-- Exercice 3.1 -->
<?php
date_default_timezone_set('Europe/Paris');
$aujourdhui=date("N");
$tableauAssocDate = array (1=>"Lundi",
                           2=>"Mardi",
                           3=>"Mercredi",
                           4=>"Jeudi",
                           5=>"Vendredi",
                           6=>"Samedi",
                           7=>"Dimanche");
echo "<h4> Bonjour, nous sommes le " . $tableauAssocDate[$aujourdhui] . " " . $date . "</h4>"; 
?>
</body>
</html>
