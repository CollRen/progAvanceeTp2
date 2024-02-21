# progAvanceeTp2

## Ajustement principaux

### Recette

#### Objectif

1. Pouvoir choisir l'auteur et la catégorie lors de la création
    - SQL
        - Ajouter recette_categorie_id
    - /create.php ->    Ajouter ces champs dans le formulaire

2. Edit recette
- Mécanique affichage twig:
    - /edit.php -> 
    - /show.php
    - /index.php
    - Ajouter auteur
    - Ajouter Catégorie


3. S'assurer qu'il y a des données dans toutes les tables dans la création SQL
    - Ou gérer le cas limite: Il n'y a pas encore de données sur cette page

#### Éventuellement :

- Création de recette: choisir les ingrédients => recette_has_ingredient
    1. Ajuster formulaire dans /recette/create.php
    2. Ajuster la class Recette -> store

## Ajustements

1. SQL
    - Montre mon SQL à Marcos

2. Nettoyage
    - Bug avec le edit sans changment dans certaines table
- Rectifier les occurences de "errors.[quelque_chose]" 
    - ex: errors.zip_code

3. Twig page ing.cat
    - Il peut y avoir un message d'erreur?

5. Ajouter PNG du diagram à la racine de mon dossier

6. Montrer le bug dans Idit lorsque Clické une deuxième fois



## Création d'entités

1. models -> Copier "Recette.php" et renommer [nom_instance_entité] 
    - Dans ce fichier, renommer "recette" par [nom_instance_entité]
2. routes/web.php -> Copier les routes recette et renommer [nom_instance_entité]
3. views -> Copier /recette et renommer [nom_instance_entité] puis toutes les instances de "recette" pour [nom_fichier]
4. /controllers -> Créer un controller [nom_instance_entité]
    - Attention à la CASE recette VS recettes VS Recette

5. /layout/footer et header pour ajouter cet instance au menu au besoin
6. /views/[nom_instance_entité]/index.php -> changer ce qu'il faut changer