#Examen L2 Web dynamique

1. Comment se déclare une variable avec l'identifiant `mavariable` en PHP ?
	* `$maVariable`
	* `maVariable`
	* `$_GET["mavariable"]`
	* aucune 

2. Quel est l'attribut de la balise HTML `form` permettant d'indiquer le fichier script qui traitera la requête contant les informations saisies dans le formulaire?
	* `value`
	* `action`
	* `method`
	* aucun

3. Dans le cas d'envoi d'informations plus ou moins sensibles par formulaire, quelle méthode HTTP utilisera-t-on de préférence ?
	* GET
	* POST
	* SESSION
	* HTTPS
	* aucune

4. Le PHP est un langage compilé :
	* Vrai
	* Faux

5. Les erreurs en PHP sont découvertes lors de l'exécution du code :
	* Vrai
	* Faux

6. Le PHP est un langage de programmation web dynamique côté serveur ?
	* Vrai 
	* Faux

7. Les pages PHP contiennent toujours:
	* uniquement du code HTML
	* uniquement du code PHP
	* du code HTML et/ou PHP

8. Laquelle (lesquelles) parmi ces instructions est (sont) syntaxiquement correcte(s) en PHP :
	* `echo "Bonjour"`
	* `echo ("Bonjour");`
	* `echo 'Bonjour';`

9. Comment définit-on la constante PI de valeur 3.14 ?
	* `set('PI' = '3.14');`
	* `define("PI","3.14");`
	* `const $PI = 3.14;`

10. Que contient la variable $resultat à la fin de l'exécution du code suivant :
`<?php 
$s = "Je m'appelle totito";
$resultat = str_replace("to","TO",$s);
?>`
	* "Je m'appelle TOtito"
	* 2
	* 13
	* "Je m'appelle TOtiTO"
	* 17

11. Contrairement à un passage d'arguments par valeur, le passage d'arguments par référence peut permettre de modifier directement la valeur de l'argument sans passer par une copie :
	* Vrai
	* Faux

12. En PHP, l'opérateur de concaténation est :
	* le symbole .
	* le symbole +
	* le symbole ,
	* Il n'y en a pas besoin

13. D'après cette URL `operationGET.php?nb1=2&nb2=3&op=mult`, quelle méthode HTTP a été utilisée dans le formulaire ?
	* GET
	* POST
	* SESSION

14. Sachant que $a = 6. Quelle(s) instruction(s) affiche(nt) : 6 = six ?
	* `echo '$a = six';`
	* `echo '$a = 3+3';`
	* `echo "$a = six";`

15. La boucle for ($i=0 ; $i<=3 ; $i++ ) { echo $i; }...
	* Sera exécutée 2 fois
	* Sera exécutée 3 fois
	* Sera exécutée 4 fois

16. Que signifie PHP ?
	* Page Helper Process
	* Programming Home Pages
	* PHP: Hypertext Preprocessor

17. Quelle fonction retourne la longueur d'une chaîne de caractères ?
	* strlen
	* size
	* length
	* substr

18. Comment accède-t-on au 1er élément toto dans le tableau suivant : 
`$tableau = Array('toto' , 'titi', 'tata');` ?
	* `$tableau[1]`
	* `$tableau[0]`
	* `$tableau['toto']`
	* `$tableau{0}`
	* `$tableau.get(1)`

19. Quelle fonction permet de lire le résultat d'une ressources MySQL renvoyée par `mysql_query()` ?
	* `mysql_fetch_row()`
	* `mysql_data_seek()
	* `mysql_affected_rows()`

20. Les scripts PHP sont entourés par des délimiteurs, lequels ?
	* `<&>...</&>`
	* `<?php>...</?>`
	* `<?php...?>`
	* `<script>...</script>`

21. Quelle est la façon correcte d'inclure le fichier `time.inc`?
 What is the correct way to include the file "time.inc" ?
	* `<?php require:"time.inc"; ?>`
	* `<?php require "time.inc"; ?>`
	* `<!-- require file="time.inc" -->`
	* `<?php require file="time.inc"; ?>`

22. Quelle est la façon correcte d'ajouter 1 à la variable `$count` ?
	* `count++;`
	* `$count =+1`
	* `$count++;`
	* `++count`

23. Le PHP et la base de données sont hébergés sur deux serveurs différents :
	* Vrai
	* Faux 


Soit le tableau associatif suivant:
`$couleur =  [
    'bleu' => '#0000ff',
    'vert' => '#00ff00',
    'jaune' => '#ffff00'
];` 

24. Comment récuperer la valeur de 'bleu'?
	* `$couleur['bleu']`
	* `$couleur[bleu]`
	* `$couleur[0]`
	* `$couleur[1]`

25. Quel est le type de la valeur récupérée?
	* chaîne de caractères
	* Color
	* variable
	* fonction

26. Quelle notation permet d'ajouter une nouvelle couleur rouge dans le tableau?
	* `$couleur['rouge'] = '#ff0000';` 
	* `$couleur[rouge] = "#ff0000";` 
	* `$couleur[$rouge] = '#ff0000';` 
	* `$couleur[3] = '#ff0000'` 


Soit la table Users[id, name, email]
Soit le code suivant ($connexion contient la connexion à la base de données avec la table Users selectionnée):
```
$req = "SELECT * FROM Users";
$res = mysql_query($connexion,$req);
$user = mysql_fetch_object($res);
```
27. Quelle est la notation permettant de récupérer la valeur de l'attribut `name` dans la variable `$user`?
	* $utilisateur->name
	* $utilisateur.name
	* $utilisateur->0
	* $utilisateur['name']

28. En PHP, comment vérifier si la page est obtenue suite à la soumission d'un formulaire avec la méthode HTTP POST?
	* `if ($POST){...}` 
	* `if (!empty($POST)){...}` 
	* `if ($_SERVER["REQUEST_METHOD"] == "POST"){...}` 
	* aucune de ces propositions 

29. D'après le code ci dessous, le formulaire permet une selection multiple.
```
foreach ($_POST['dejeuner'] as $choix){
	echo "Vous avez pris un sandwich au $choix. <br />";
}
```
Quelle est la façon correcte d'écrire le champs `dejeuner` en HTML?

	* ```<select name="dejeuner">
      <option value="jambon">Sandwich au jambon</option>
      <option value="poulet">Sandwich au poulet</option>
		</select>```
	* ```<select name="dejeuner[]" multiple>
	      <option value="jambon">Sandwich au jambon</option>
	      <option value="poulet">Sandwich au poulet</option>
  		</select>```
	* ```<select name="dejeuner" multiple>
      <option value="jambon">Sandwich au jambon</option>
      <option value="poulet">Sandwich au poulet</option>
		</select>```
	* aucune des propositions

30. Il est important d'indiquer le type d'un champs `<input>` pour :
	* la validation du formulaire
	* l'accessibilité du site
	* l'ergonomie (guider l'utilisateur/utilisatrice de manière intuitive)
	* permettre l'impression du formulaire

