<html>
<head>
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>TP2</title>
</head>
<body>
<!-- Exercices 1.1 -->
<?php

   $tableauAssoc = array (1=>"Lundi", 
                              2=>"Mardi",
                              3=>"Mercredi",
                              4=>"Jeudi",
                              5=>"Vendredi",
                              6=>"Samedi",
                              7=>"Dimanche");

   date_default_timezone_set('Europe/Paris');
   $jour = date("N");
   $date = date("d-m-Y");

   echo "Bonjour, nous sommes le " . $date . ", " .  $tableauAssoc[$jour] . "<br/>"; 
   // 1: lundi, 2 : mardi, 3: mercredi, 4 : jeudi, 5 : vendredi
   // Nous avons cours d'info les jeudis et les vendredis
   if ($jour == 4 || $jour == 5)  {
       echo "Vous avez cours d'informatique aujourd'hui!";
   }
?>

</body>
</html>
