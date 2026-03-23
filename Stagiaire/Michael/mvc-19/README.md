# Exercice MVC | mvc-19

## Marche à suivre préparation TI1

### Phase 1

1) On part de votre ordinateur
- Création d'un dossier sur votre ordinateur : `git init`
- Création d'un `repository` sur `Github`, puis on le lien en local : `git remote add origin KEY@SSH`

#### Ou

2) On part de `github`
- On crée un `fork` du `repository` "**upstream**" sur `Github`
- On clone le `fork` du `repository` depuis `Github` (utilisation de `SSH` de préférence) sur votre ordinateur mais **pas dans un projet git existant ni un endroit suivi par une synchronisation (OneDrive, Dropbox, ICloud etc..., )**

#### Ensuite

- Ajout de l'upstream (pour le `pull request` final) : `git remote add upstream KEY@SSH`
- Création du `.gitignore` vide (**! Important**)
- Dossiers vide ? `.gitkeep`
- Informer sur le projet ? `README.md`