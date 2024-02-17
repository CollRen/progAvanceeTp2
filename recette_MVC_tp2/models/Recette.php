<?php
namespace App\Models;
use App\Models\CRUD;

class Recette extends CRUD{
    protected $table = 'recette';
    protected $primaryKey = 'id';
    protected $fillable = ['titre', 'description', 'temps_preparation', 'temps_cuisson'];
}


