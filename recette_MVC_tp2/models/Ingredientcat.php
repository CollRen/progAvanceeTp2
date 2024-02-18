<?php
namespace App\Models;
use App\Models\CRUD;

class Ingredientcat extends CRUD{
    protected $table = 'ingredient_categorie';
    protected $primaryKey = 'id';
    protected $fillable = ['nom'];
}


