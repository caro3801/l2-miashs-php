<html>
<head>
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>TP2 - Informatique</title>
</head>
<body>
<?php 

    // TP 2 Exercice 2.1 =============================================    
    function maj($chaine) // passage de parametre (par reference?)
    {
             $chaine = strtoupper($chaine);
			 return $chaine;
    }


   // TP 2 : Exercice 2 =============================================
   
   
   date_default_timezone_set('Europe/Paris');
   $jour = date("N");
   $date = date("d-m-Y");
   
   $tableauAssocDate = array (1=>"Pas cours d'informatique!", 
                              2=>"Pas cours d'informatique!",
                              3=>"Pas cours d'informatique!",
                              4=>"Cours d'informatique!",
                              5=>"Pas cours d'informatique!",
                              6=>"Pas cours d'informatique!",
                              7=>"Pas cours d'informatique!");
   

  if ( $tableauAssocDate[$jour] != "Pas cours d'informatique!" ) {
	echo "Bonjour, nous sommes le " . $date . ", Chouette ! " .  maj($tableauAssocDate[$jour]) . "<br/>"; 
  }
  else {
	echo "Bonjour, nous sommes le " . $date . ", " .  $tableauAssocDate[$jour] . "<br/>";
  };
  
   // 1: lundi, 2 : mardi, 3: mercredi, 4 : jeudi, 5 : vendredi
   // Nous avons cours d'info les mardis et les vendredis
   if ($jour == 2 || $jour == 5)  {
       echo "Vous avez cours d'informatique aujourd'hui!";
   };
     
?>


</body>
</html>
