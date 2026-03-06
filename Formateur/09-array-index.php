<?php
// tableau indexé
$monTab = ['un','deux','trois','quatre','cinq','six','sept','huit','neuf','dix',11,12,[13,true]];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9</title>
</head>
<body>
    <h2>Exercice 9</h2>
    <h3>Suite d'echo</h3>

    <?php
    echo $monTab[0];
    echo "<hr>";
    echo $monTab[1];
    echo "<hr>";
    echo $monTab[2];
    echo "<hr>";
    echo $monTab[3];
    echo "<hr>";
    echo $monTab[4];
    echo "<hr>";
    echo $monTab[5];
    echo "<hr>";
    echo $monTab[6];
    echo "<hr>";
    echo $monTab[7];
    echo "<hr>";
    echo $monTab[8];
    echo "<hr>";
    echo $monTab[9];
    echo "<hr>";
    ?>
<h3>Un echo avec concaténation</h3>
<p>On peut concaténer avec 2 caractères en PHP => le '.' ou la ','</p>
    <?php
    echo $monTab[0] . "<hr>" .
         $monTab[1] , "<hr>" .
         $monTab[2] . "<hr>" .
         $monTab[3] . "<hr>" .
         $monTab[4] . "<hr>" .
         $monTab[5] , "<hr>" ,
         $monTab[6] . "<hr>" .
         $monTab[7] . "<hr>" ,
         $monTab[8] , "<hr>" .
         $monTab[9] . "<hr>"
    
    ?>
    <h3>Un print avec concaténation</h3>
<p>On ne peut concaténer qu'avec le '.' plus la ','</p>
    <?php
    print $monTab[0] . "<hr>" .
         $monTab[1] . "<hr>" .
         $monTab[2] . "<hr>" .
         $monTab[3] . "<hr>" .
         $monTab[4] . "<hr>" .
         $monTab[5] . "<hr>" .
         $monTab[6] . "<hr>" .
         $monTab[7] . "<hr>" .
         $monTab[8] . "<hr>" .
         $monTab[9] . "<hr>" 
    
    ?>
    <h3>Affichage entre "" => concaténation optionelle</h3>
<pre>// echo avec '' => pas d'interprétation
    echo '$monTab[0]&lt;hr>$monTab[1]&lt;hr>$monTab[2]&lt;hr>';
    // echo avec"" => interpréte et fonctionne avec les variables tableaux indexés 
    echo "$monTab[0]&lt;hr>$monTab[1]&lt;hr>$monTab[2]&lt;hr>";</pre>
    <?php
    // echo avec '' => pas d'interprétation
    echo '$monTab[0]<hr>$monTab[1]<hr>$monTab[2]<hr>';
    // echo avec"" => interpête et fonctionne avec les variables tableaux indexés 
    echo "$monTab[0]<hr>$monTab[1]<hr>$monTab[2]<hr>";
    ?>
    <?php
    var_dump($_GET, $monTab);
    ?>
</body>
</html>