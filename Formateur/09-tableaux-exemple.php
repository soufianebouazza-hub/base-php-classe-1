<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau indexé</title>
</head>
<body>
    <h1>Tableau indexé</h1>
    <?php
    
$fruits = ["pomme", 
		   "poire",
		   "banane",
		   "fraise",
		   "cerise",
		   ];
?>
<pre>
<?php
var_dump($fruits);
?>
<p>Pour afficher un élément du tableau, on utilise sa clé :</p>
<p><?=$fruits[3]?></p>
<h2>Tout est tableau en PHP!</h2>
<p>Chaque lettre d'un texte est décomposable en tableau</p>
<p><?=$fruits[3][0]?>,
<?=$fruits[3][1]?>, 
<?=$fruits[3][2]?>, 
<?=$fruits[3][3]?>, 
<?=$fruits[3][4]?>,
<?=$fruits[3][5]?>,
<?php
// pour ne pas interpréter les variables, utilisation ' '
echo '$fruits[3][6] n\'existe pas donc erreur';
?>
<?=$fruits[3][6]?>,
</p>
<p>Ajout d'un nouveau fruit, count() est une fonction permettant de compter (à partir de 1) le nombre d'éléments du tableau</p>
<code>
    $compte_avant = count($fruits);
    $fruits[] = "Kiwi";
    array_push($fruits,"Ananas");
    $compte_apres = count($fruits);

    echo "&lth5>Fruits avant: $compte_avant dans la variable".' $fruits '. "et fruits après : $compte_apres&lt/h5>";
</code>

<?php
$compte_avant = count($fruits);
// ajout d'un fruit
$fruits[] = "Kiwi";
// autre manière d'ajouter, ceci n'est pas une fonction
// mais une procédure (pas de retour)
array_push($fruits,"Ananas");

$compte_apres = count($fruits);

echo "<h5>Fruits avant: $compte_avant dans la variable".' $fruits '. "et fruits après : $compte_apres</h5><hr>";
print "<h5>Fruits avant: $compte_avant dans la variable".' $fruits '."et fruits après : $compte_apres</h5>";
?>
<h3>Le tableau, contrairement à la plupart des langages, n'est pas un object</h3>
<?php
$date = new DateTime();
var_dump($fruits,$date);
?>
</pre>
</body>
</html>