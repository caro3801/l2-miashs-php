<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" media="all" />
		<title>Restaurants</title>
	</head>
	<body>
<?php
$restaurants = array (
    "La belle saison" => array (
        "steak" => 17,
        "pâtes" => 14,
        "café" => 2,
    ),
    "Le coq d'or" => array (
        "poisson" => 12,
        "soupe" => 9,
        "café" => 3,
    ),
    "Le Fil à la Une" => array(
        "Steak poivré" => 24,
        "Entrecôte" => 27,
        "Salade César" => 20,
    ),
    "Flunch" => array(
        "vol au vent" => 12,
        "poulet" => 11,
        "soupe" => 8,
    ),
    "Sansson" => array(
        "poisson" => 18,
        "pâtes" => 17,
        "pain" => 10,
    )
);


foreach($restaurants as $restaurant => $carte){
    echo "<h2>" . $restaurant . "</h2>";
    echo "<ul>";
    foreach($carte as $plat => $prix){
        echo "<li>" . '<span id="plat">'. $plat . " </span> " . $prix . " &euro;</li>";
    }
    echo "</ul>";
}
?>


	</body>
</html>
