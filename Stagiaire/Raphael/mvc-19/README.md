# Exercice MVC | mvc-19

## Marche à suivre préparation TI1

### Phase 1

1) On part de votre ordinateur 

- Création d'un dossier sur votre ordinateur : `git init`
- Création d'un `repository` sur `Github` puis on le lie en local : `git remote add origin KEY@SSh`

2) On part de `github`

- On crée un `fork` du `repository` "**upstream**" sur `Github`
- On clone le `fork` du `repository` depuis `Github` (Utilisation de `SSH` de préference) sur votre ordinateur mais **pas dans un projet git éxistant ni un endroit suivi par une synchronisation(OneDrive, Dropbox, ICloud etc..., )**

#### Ensuite

- Ajout de l'upstream (pour le `pull request` final) : `git remote add upstream KEY@SSH`
- Création du `.gitignore` vide (**! Important**)
- Dossiers vide ? `.gitkeep`
- Informer sur le projet ? `README.md`

### Phase 2

Création des dossiers important du site pour le MVC (Model View Controller)
- `public`accessible a tous (**frontend**)
- `model` Il gère l'accès aux données (**Backend**)
- `view` Dossier contenant les vues (templates) (**Backend**)
- `controller` Dossier qui gère le lien entre les `view` et les `model` (Entre **Backend** et **Middle-end**)
- `datas` - nos fichiers de préparation du travail

#### .gitkeep

Mettez-y des `.gitkeep` dans chaque dossier et faites des commit.

#### Création du config.php

**AVANT** la création de `Stagiaire/Raphael/mvc-19/config.php`, ouvrez `.gitignore` et mettez-y : 

```bash
# Stagiaire\Raphael/mvc-19/.gitignore
# On protège nos variables et constantes dangereuses
# du fichier config.php
config.php

<?php
# Stagiaire/Raphael/mvc-19/config.php

// constante (variable qui ne peut être 
// redéfinie pendant la durée du script)

# __DIR__ constante magique qui donnera 
# le chemin absolu vers la racine du projet
const ROOT_PATH = __DIR__; 
```

Créez le fichier `config.php` à la racine du projet. Il est protégé grâce au `.gitconfig`.

### Phase 2

#### Création du controlleur frontal

Le front controller, nommé `public/index.php`, est le seul fichier `php` qui sera accessible à un utilisateur externe.

#### Création du config.php

Il va devoir recréer config.php pour accéder au constantes de sécurité.

        cp config.ini.php config.php