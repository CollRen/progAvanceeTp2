<?php
namespace App\Models;
use App\Models\CRUD;

class Recettehasingredient extends CRUD{
    protected $table = 'recettehasingredient';
    protected $primaryKey = ['recette_id', 'ingredient_id' ];
    protected $fillable = ['recette_id', 'ingredient_id', 'quantite', 'unite_mesure_id'];
}




