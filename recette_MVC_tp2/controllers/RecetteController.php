<?php
namespace App\Controllers;

use App\Models\Recette;
use App\Providers\View;
use App\Providers\Validator;


class RecetteController {

    public function index(){
        $recette = new Recette;
        $select = $recette->select();
        //print_r($select);
        //include('views/recette/index.php');
        if($select){
            return View::render('recette/index', ['recettes' => $select]);
        }else{
            return View::render('error');
        }    
    }

    public function show($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $recette = new Recette;
            $selectId = $recette->selectId($data['id']);
            if($selectId){
                return View::render('recette/show', ['recette' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function create(){
        return View::render('recette/create');
    }

    public function store($data){
        
        $validator = new Validator;
        $validator->field('titre', $data['titre'], 'Le nom')->min(2)->max(25);
        $validator->field('description', $data['description'])->max(45);
        $validator->field('temps_preparation', $data['temps_preparation'], 'Zip Code')->max(10);
        $validator->field('temps_cuisson', $data['temps_cuisson'])->max(20);
        

        if($validator->isSuccess()){
            $recette = new Recette;
            $insert = $recette->insert($data);        
            if($insert){
                return View::redirect('recette');
            }else{
                return View::render('error');
            }
        }else{
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('recette/create', ['errors'=>$errors, 'recette' => $data]);
        }
    }

    public function edit($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $recette = new Recette;
            $selectId = $recette->selectId($data['id']);
            if($selectId){
                return View::render('recette/edit', ['recette' => $selectId]);
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
        $validator->field('titre', $data['titre'], 'Le nom')->min(2)->max(25);
        $validator->field('description', $data['description'])->max(45);
        $validator->field('temps_preparation', $data['temps_preparation'], 'Zip Code')->max(10);
        $validator->field('temps_cuisson', $data['temps_cuisson'])->max(20);
        

        if($validator->isSuccess()){
                $recette = new Recette;
                $update = $recette->update($data, $get['id']);

                if($update){
                    return View::redirect('recette/show?id='.$get['id']);
                }else{
                    return View::render('error');
                }
        }else{
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('recette/edit', ['errors'=>$errors, 'recette' => $data]);
        }
    }

    public function delete($data){
        $recette = new  Recette;
        $delete = $recette->delete($data['id']);
        if($delete){
            return View::redirect('recette');
        }else{
            return View::render('error');
        }
    }
}