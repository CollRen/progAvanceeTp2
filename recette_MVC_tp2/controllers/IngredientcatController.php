<?php
namespace App\Controllers;

use App\Models\Ingredientcat;
use App\Providers\View;
use App\Providers\Validator;


class IngredientCatController {

    public function index(){
        $ingredientcat = new Ingredientcat;
        $select = $ingredientcat->select();
        //print_r($select);
        //include('views/ingredientcat/index.php');
        if($select){
            return View::render('ingredientcat/index', ['ingredientcats' => $select]);
        }else{
            return View::render('error');
        }    
    }

    public function show($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $ingredientcat = new Ingredientcat;
            $selectId = $ingredientcat->selectId($data['id']);
            if($selectId){
                return View::render('ingredientcat/show', ['ingredientcat' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function create(){
        return View::render('ingredientcat/create');
    }

    public function store($data){
        
        $validator = new Validator;
        $validator->field('nom', $data['nom'], 'Le nom')->min(2)->max(45);

        if($validator->isSuccess()){
            $ingredientcat = new Ingredientcat;
            $insert = $ingredientcat->insert($data);        
            if($insert){
                return View::redirect('ingredientcat');
            }else{
                return View::render('error');
            }
        }else{
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('ingredientcat/create', ['errors'=>$errors, 'ingredientcat' => $data]);
        }
    }

    public function edit($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $ingredientcat = new Ingredientcat;
            $selectId = $ingredientcat->selectId($data['id']);
            if($selectId){
                return View::render('ingredientcat/edit', ['ingredientcat' => $selectId]);
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
                $ingredientcat = new Ingredientcat;
                $update = $ingredientcat->update($data, $get['id']);

                if($update){
                    return View::redirect('ingredientcat/show?id='.$get['id']);
                }else{
                    return View::render('error');
                }
        }else{
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('ingredientcat/edit', ['errors'=>$errors, 'ingredientcat' => $data]);
        }
    }

    public function delete($data){
        $ingredientcat = new  Ingredientcat;
        $delete = $ingredientcat->delete($data['id']);
        if($delete){
            return View::redirect('ingredientcat');
        }else{
            return View::render('error');
        }
    }
}