# progAvanceeTp2

## Ajustements

1. Nomenclature
    - Changer nom de class IngredientCatController POUR IngredientCatController
    - Ajouter suffix '_id' à ingredient_categorie (Voir point SQL)
2. Ajouter table ing.Cat dans Show
3. Twig page ing.cat
4. BD changer SQL des temps de recettte pour INT 
    - Et changer HTML pour 'Temps en minutes'
5. Ajouter PNG du diagram à la racine de mon dossier
6. SQL
    - Ajouter suffix '_id' à ingredient_categorie
    - Montre mon SQL à Marcos
7. Montrer le bug dans Idit lorsque Clické une deuxième fois

## Création d'entités

1. models -> Copier "Recette.php" et renommer [nom_instance_entité] 
    - Dans ce fichier, renommer "recette" par [nom_instance_entité]
2. routes/web.php -> Copier les routes recette et renommer [nom_instance_entité]
3. views -> Copier /recette et renommer [nom_instance_entité] puis toutes les instances de "recette" pour [nom_fichier]
4. /controllers -> Créer un controller [nom_instance_entité]
    - Attention à la CASE recette VS recettes VS Recette

5. /layout/footer et header pour ajouter cet instance au menu au besoin
6. /views/[nom_instance_entité]/index.php -> changer ce qu'il faut changer