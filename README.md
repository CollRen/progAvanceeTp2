# progAvanceeTp2


## Ajustements à cours terme

1. Revoir la validation, comparer avec notes de cours et simplifier
2. ajouter la validation dans les Edits

## Ajustments en fin de parcours

### Design
- Revoir le design de recette Show pour être plus comme un livre de recette
- Mettre l'ption d'ajouter une image pour encore plus de beau
- Définir les couleurs principales
- Définir l'échelle type et rythmique dans des varibble


## Ajustement principaux

- Changer le fichier htacces pour être compatible avec webdev

- Ajouter le footer à la page création de recette

- Ajouter le code twig pour faire afficher les messages d'erreurs dans le header
- On pourrait appliquer le même principe avec des messages de succès...





### Recette


##### Auteur et Catégorie dans Recette

- Changements à faire dans 
    - store, edit
    - Changement différents dans create
    - Ajouter dans $fillable []

```php
/RecetteController -> Ajouter ces deux lignes sous show
        $ingredientCat = new IngredientCat;
        $selectCat = $ingredientCat->select();
        
        if($select && $selectCat){
            return View::render('ingredient/index', ['ingredients' => $select, 'ingredientcats' => $selectCat]);
        }
```

- create
```php    
    public function create(){
        $ingredientCat = new IngredientCat;
        $selectCat = $ingredientCat->select();
        return View::render('ingredient/create', ['ingredientcats' => $selectCat]);
    }
```

##### HTML

- HTML -> Ajuster twig

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