create database recettes;

create table wuatrpaz_recettes.auteur(
id int not null auto_increment primary key,
nom VARCHAR(45),
prenom text(45)
);

create table wuatrpaz_recettes.recette_categorie(
id int not null auto_increment primary key,
nom VARCHAR(45)
);

create table wuatrpaz_recettes.recette(
id int not null auto_increment primary key,
titre VARCHAR(60),
description text(256),
temps_preparation INT, -- Ici DOUBLE PRECISION ou DOUBLE ne fonctionnent pas
temps_cuisson INT,
recette_categorie_id INT,
auteur_id INT
);

create table wuatrpaz_recettes.ingredient_categorie(
id int not null auto_increment primary key,
nom VARCHAR(45)
);

create table wuatrpaz_recettes.unite_mesure(
id INT not null auto_increment primary key,
nom VARCHAR(20)
);

create table wuatrpaz_recettes.ingredient(
id int not null auto_increment primary key,
nom varchar(45) not null unique,
ingredient_categorie_id INT  -- Éventuellement ajouter NOT NULL
);

create table wuatrpaz_recettes.recette_has_ingredient(
recette_id INT,
ingredient_id INT,
quantite FLOAT, -- DOUBLE PRECISION() ne fonctionne pas
unite_mesure_id INT,
constraint fk_recette_id foreign key (recette_id) REFERENCES wuatrpaz_recettes.recette (id),
constraint fk_ingredient_id foreign key (ingredient_id) REFERENCES wuatrpaz_recettes.ingredient (id)
);


INSERT INTO wuatrpaz_recettes.ingredient_categorie (`id`, `nom`) VALUES 
(NULL, 'Épices'),
(NULL, 'Fromage'),
(NULL, 'Viande'),
(NULL, 'Fines herbes'),
(NULL, 'Fruit'),
(NULL, 'Légume');

INSERT INTO wuatrpaz_recettes.unite_mesure (`id`, `nom`) VALUES 
(NULL, 'Tbs'),
(NULL, 'tsp'),
(NULL, 'Cup'),
(NULL, 'lb'),
(NULL, 'oz'),
(NULL, 'gr'),
(NULL, 'ml');


INSERT INTO wuatrpaz_recettes.ingredient
(
`nom`,
`ingredient_categorie_id`)
VALUES (
'Sel de célerie',
1);

INSERT INTO wuatrpaz_recettes.recette_categorie (`id`, `nom`) VALUES 
(NULL, 'Dessert'),
(NULL, 'Plats principaux');

INSERT INTO wuatrpaz_recettes.auteur (`id`, `prenom`, `nom`) VALUES 
(NULL, 'Alfred', 'Dallair'),
(NULL, 'Mélissa', 'Meta');



INSERT INTO wuatrpaz_recettes.recette
VALUES (NULL, 'Ma recette Fétiche', 'De tout pour faire une bon potage à la volé', 10, 15, 1, 1);

INSERT INTO wuatrpaz_recettes.recette_has_ingredient
(`recette_id`,
`ingredient_id`,
`quantite`,
`unite_mesure_id`)
VALUES
(1,
1,
2,
1);

