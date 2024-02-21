create database recettes;

create table auteur(
id int not null auto_increment primary key,
nom VARCHAR(45),
prenom text(45)
);

create table recette_categorie(
id int not null auto_increment primary key,
nom VARCHAR(45)
);

create table recette(
id int not null auto_increment primary key,
titre VARCHAR(60),
description text(256),
temps_preparation VARCHAR(12),
temps_cuisson VARCHAR(12),
recette_categorie_id INT,
auteur_id INT
);

create table ingredient_categorie_id(
id int not null auto_increment primary key,
nom VARCHAR(45)
);

create table unite_mesure(
id INT not null auto_increment primary key,
nom VARCHAR(20)
);

create table ingredient(
id int not null auto_increment primary key,
nom varchar(45) not null unique,
ingredient_categorie_id INT  -- Éventuellement ajouter NOT NULL
);

create table recette_has_ingredient(
recette_id INT,
ingredient_id INT,
quantite VARCHAR(45),
unite_mesure_id INT,
constraint fk_recette_id foreign key (recette_id) REFERENCES recette (id),
constraint fk_ingredient_id foreign key (ingredient_id) REFERENCES ingredient (id)
);


INSERT INTO ingredient_categorie_id (`id`, `nom`) VALUES 
(NULL, 'Épices'),
(NULL, 'Fromage'),
(NULL, 'Viande'),
(NULL, 'Fines herbes'),
(NULL, 'Fruit'),
(NULL, 'Légume');

INSERT INTO unite_mesure (`id`, `nom`) VALUES 
(NULL, 'Tbs'),
(NULL, 'tsp'),
(NULL, 'Cup'),
(NULL, 'lb'),
(NULL, 'oz'),
(NULL, 'gr'),
(NULL, 'ml');


INSERT INTO `recettes`.`ingredient`
(
`nom`,
`ingredient_categorie_id`)
VALUES (
'Sel de célerie',
1);

INSERT INTO recette_categorie (`id`, `nom`) VALUES 
(NULL, 'Dessert'),
(NULL, 'Plats principaux');


INSERT INTO `recettes`.`recette_has_ingredient`
(`recette_id`,
`ingredient_id`,
`quantite`,
`unite_mesure_id`)
VALUES
(1,
1,
2,
1);



