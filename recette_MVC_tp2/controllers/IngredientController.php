<?php
namespace App\Controllers;

use App\Models\Ingredient;
use App\Models\IngredientCat;
use App\Providers\View;
use App\Providers\Validator;


class ingredientController {

    public function index(){
        $ingredient = new Ingredient;
        $select = $ingredient->select();

        $ingredientCat = new IngredientCat;
        $selectCat = $ingredientCat->select();
        
        if($select && $selectCat){
            return View::render('ingredient/index', ['ingredients' => $select, 'ingredientcats' => $selectCat]);
        }else{
            return View::render('error');
        }    
    }

    public function show($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $ingredient = new Ingredient;
            $selectId = $ingredient->selectId($data['id']);

            if($selectId){
                $ingredientCat = new IngredientCat;
                $selectCat = $ingredientCat->select();
                return View::render('ingredient/show', ['ingredient' => $selectId, 'ingredientcats' => $selectCat]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function create(){

        $ingredientCat = new IngredientCat;
        $selectCat = $ingredientCat->select();
        return View::render('ingredient/create', ['ingredientcats' => $selectCat]);
    }

    public function store($data){
        $validator = new Validator;
        $validator->field('nom', $data['nom'], 'Le nom')->min(2)->max(45);
        /* VAlider que c'est un INT et required */
        $validator->field('ingredient_categorie', $data['ingredient_categorie'], 'Le id de la catégorie')->min(1)->required();

        if($validator->isSuccess()){
            $ingredient = new Ingredient;
            $insert = $ingredient->insert($data);        
            if($insert){
                return View::redirect('ingredient');
            }else{
                return View::render('error');
            }
        }else{
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('ingredient/create', ['errors'=>$errors, 'ingredient' => $data]);
        }
    }

    public function edit($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $ingredient = new Ingredient;
            $selectId = $ingredient->selectId($data['id']);
            if($selectId){
                $ingredientCat = new IngredientCat;
                $selectCat = $ingredientCat->select();

                return View::render('ingredient/edit', ['ingredient' => $selectId, 'ingredientcats' => $selectCat]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }
    public function update($data, $get){
        // $get['id'];
        $validator = new Validator;
        $validator->field('nom', $data['nom'], 'Le nom')->min(2)->max(45);

        if($validator->isSuccess()){
                $ingredient = new Ingredient;
                $update = $ingredient->update($data, $get['id']);

                if($update){
                    return View::redirect('ingredient/show?id='.$get['id']);
                }else{
                    return View::render('error');
                }
        }else{
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('ingredient/edit', ['errors'=>$errors, 'ingredient' => $data]);
        }
    }

    public function delete($data){
        $ingredient = new  Ingredient;
        $delete = $ingredient->delete($data['id']);
        if($delete){
            return View::redirect('ingredient');
        }else{
            return View::render('error');
        }
    }
}