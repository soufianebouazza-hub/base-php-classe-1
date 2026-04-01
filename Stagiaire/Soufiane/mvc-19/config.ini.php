<?php

// Chemin absolu vers la racine du projet.
// On s'en sert pour construire des include fiables.
const ROOT_PATH = __DIR__;

// Liste blanche des pages accessibles via ?page=...
// Le routeur s'appuie dessus pour eviter d'inclure n'importe quel fichier.
// Dans une vraie application, on y mettrait les pages publiques.
// Pour progresser : pense toujours "j'autorise explicitement" plutot que "je laisse tout passer".
const PUBLIC_PAGES = [
    // Exemple d'evolution possible :
    // 'a-propos',
    // 'competences',
    // 'projets',
    // 'contact',
];
