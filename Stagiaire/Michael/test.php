<?php
var_dump($_GET);

echo htmlspecialchars($_GET["section"]);



echo $chaine = "42";

echo $entier = (int) $chaine;       // 42
echo $decimal = (float) $chaine;    // 42.0
$booleen = (bool) $chaine;     // true
$tableau = (array) $chaine;    // ["42"]
$redevientChaine = (string) 42;// "42"

$var = "123";
$var2 = "abc";
$var3 = "0";

if(settype($var2,"integer")){
    echo "Non modifiable";
}else{
    echo '$var2'." vaut $var2";
}
settype($var, "integer");

echo $chaine = "42";

echo $entier = (int) $chaine;  

echo $chaine2 = "pm42";

echo $entier2 = (int) $chaine2; 

echo $chaine3 = "var2";

echo $entier3 = (int) $chaine3; 