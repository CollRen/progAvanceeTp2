<?php
namespace App\Models;
use App\Models\CRUD;

class Tester extends CRUD{
    protected $table = 'tester';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'zip_code', 'phone', 'email'];
}


