<?php
namespace App\Models;
use App\Models\CRUD;

class Tester extends CRUD{
    protected $table = 'tester';
    protected $primaryKey = 'id';
    protected $fillable = ['titre', 'description', 'temps_preparation', 'temps_cuisson'];
}


