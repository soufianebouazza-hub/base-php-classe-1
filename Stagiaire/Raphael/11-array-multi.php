<?php
$stagiaires = [
    "stagiaire01" => [
        "Nom" => "Dupont",
        "Prenom" => "Jean",
        "Sites" => [
            "SitePerso" => "https://example.com/jean/",
            "github" => "https://github.com/jean",
        ],
    ],
    "stagiaire02" => [
        "Nom" => "Martin",
        "Prenom" => "Marie",
        "Sites" => [
            "SitePerso" => "https://example.com/marie/",
            "github" => "https://github.com/marie",
        ],
    ],
    "stagiaire03" => [
        "Nom" => "Pitz",
        "Prenom" => "Michael",
        "Sites" => [
            "SitePerso" => "https://example.com/michael/",
            "github" => "https://github.com/michael",
        ],
    ],
];

echo $stagiaires["stagiaire03"]["Sites"]["github"];