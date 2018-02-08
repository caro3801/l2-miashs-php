<html>
<head>
  <title>Visualisation </title>
  <meta charset="utf-8"/>
</head>
<body>
    <?php
    if(isset($_POST)){
        echo 'toto';
    }
        $nbre1=$_POST['nb1'];
		$nbre2=$_POST['nb2'];
		$op=$_POST['op'];
    ?>
    <form action="choixOperationListe.php" method="post">
      <h1>Opération sur deux nombres</h1>
      <!-- operande gauche--> 
      <input name="nb1" size="3" type="text" value="5"/>
      <!-- operateur--> 
      <select name="op">
          <?php
          
          switch($op){
			case "somme":
                    $res = $nbre1+$nbre2;
                    echo '           
                    <option value="somme" selected>+</option>
                    <option value="sous">-</option>
                    <option value="mult">*</option>';
				break;
			case "sous":
                    $res=$nbre1-$nbre2;
                    echo '           
                    <option value="somme" >+</option>
                    <option value="sous" selected>-</option>
                    <option value="mult">*</option>';
				break;
			// TP 4 Exercice 1.4 =========
			case "mult":
                    $res = $nbre1*$nbre2;
                    echo '           
                    <option value="somme">+</option>
                    <option value="sous">-</option>
                    <option value="mult" selected>*</option>';
                break;
            default:
                    echo '           
                    <option value="somme">+</option>
                    <option value="sous">-</option>
                    <option value="mult">*</option>';
                    break;
		}?>
      </select>
      <!-- operande droite--> 
      <input name="nb2" size="3" type="text" value="2"/>

      <input value="=" type="submit"/><?php echo " $res";?><br/>
     
    </form>
</body>
</html>
