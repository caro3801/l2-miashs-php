<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" media="all" />
		<title>TP2 - Exercice 1 - Calcul</title>
	</head>
	<body>
<!-- TP 2 : Exercices 1 -->
<?php
echo "<h1>Exercice 1</h1>";
$articles = array(
    "p1" => 200,
    "p2" => 300,
    "p3" => 10,
    "p4" => 110,
    "p5" => 250
);

echo '<table summary="Produits" border="1">';
echo '<caption>Prix des produits</caption>';
echo '<thead> 
<tr>
    <th>Nom</th>
    <th>prix HT</th>
    <th>prix TTC</th>
</tr>
    </thead>';

echo '<tbody>';

$somme_HT = 0;
$somme_TTC = 0;

foreach($articles as $produit => $prix){

    $ttc=$prix*(1.15);
    echo '<tr>';
    echo "<td>$produit</td>";
    echo "<td>$prix</td>";
    echo "<td>$ttc</td>";
    echo '</tr>';

    $somme_HT = $somme_HT + $prix;
    $somme_TTC = $somme_TTC + $ttc;
}

echo '</tbody>';

echo "<tfoot>
    <tr>
        <th>somme</th>
        <th>$somme_HT</th>
        <th>$somme_TTC</th>
    </tr>
</tfoot>";

echo '</table>';
?>


<!-- TP 2 : Exercices 4 -->
<?php

$somme_HT = 0;
$somme_TTC = 0;
echo "<h1>Exercice 3</h1>";

echo '<table summary="Produits" border="1">';
echo '<caption>Prix des produits</caption>';
echo '<thead> 
<tr>
    <th>Nom</th>
    <th>prix HT</th>
    <th>prix TTC</th>
</tr>
    </thead>';

echo '<tbody>';


foreach($articles as $produit => $prix){

    echo '<tr>';
    $ttc = HT2TTC($prix);

    echo "<td>$produit</td>";
    echo "<td>$prix</td>";
    echo "<td>$ttc</td>";

    echo '</tr>';
}

echo '</tbody>';

echo "<tfoot>
<tr>
    <th>sommes</th>
    <th>" . somme($articles) ."</th>
    <th>". HT2TTC(somme($articles)) . "</th>
</tr>";

echo '</table>';



function HT2TTC($ht){
    return $ht + ($ht * 0.15);
}

function somme($tab){

    $somme = 0;
    foreach($tab as $produit => $prix){
        $somme = $prix + $somme;
    }
    return $somme;
}

?>
	</body>
</html>
