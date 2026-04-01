<?php
# Stagiaire/Michael/mvc-19/public/index.php

/*
Point d'entree de l'application :
- on charge la configuration une seule fois ;
- on choisit ensuite quelle vue afficher selon l'URL.
Si le fichier manque, require_once stoppe l'execution.

Pour t'ameliorer :
- comprends bien que ce fichier sert de routeur ;
- dans un MVC plus complet, on passerait souvent par un controller avant la vue.
*/
require_once "../config.php";

// Si aucune page n'est demandee, on affiche l'accueil.
if(!isset($_GET['page'])){
    include ROOT_PATH."/view/index.php" ;
}elseif(in_array($_GET['page'],PUBLIC_PAGES)){

   // La page demandee fait partie de la liste blanche PUBLIC_PAGES.
   // Exemple : ?page=contact charge /view/contact.php
   // Bonne habitude : ne jamais faire confiance directement a une valeur venant de l'URL.
   include ROOT_PATH."/view/".$_GET['page'].".php";
}else{

    // Toute page inconnue ou interdite affiche la vue 404.
    // C'est plus propre pour l'utilisateur et plus sur pour l'application.
    include ROOT_PATH."/view/404.php";
}
