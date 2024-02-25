<?php
namespace App\Controllers;

use App\Models\Recette;
use App\Models\Auteur;
use App\Models\RecetteCategorie;
use App\Providers\View;
use App\Providers\Validator;


class RecetteController {

    public function index(){
        $recette = new Recette;
        $select = $recette->select();

        $auteur = new Auteur;
        $selectAuteurs = $auteur->select();

        $recetteCats = new RecetteCategorie;
        $selectCat = $recetteCats->select();
        //print_r($select);
        //include('views/recette/index.php');
        if($select){
            return View::render('recette/index', ['recettes' => $select, 'recetteCats' => $selectCat, 'auteurs' => $selectAuteurs]);
        }else{
            return View::render('error');
        }    
    }

    public function show($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $recette = new Recette;
            $selectId = $recette->selectId($data['id']);

            $recetteCat = new RecetteCategorie;
            $selectCatId = $recetteCat->selectId($data['recette_categorie_id']);

            $auteur = new Auteur;
            $selectAuteur = $auteur->selectId($data['auteur_id']);
            if($selectId){
                return View::render('recette/show', ['recette' => $selectId, 'recetteCat' => $selectCatId, 'auteur' => $selectAuteur]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function create(){
        $recetteCategorie = new RecetteCategorie;
        $recetteCategorieSelect = $recetteCategorie->select();

        $recetteAuteur = new Auteur;
        $recetteAuteurSelect = $recetteAuteur->select();

        return View::render('recette/create', ['recetteCategories' => $recetteCategorieSelect, 'recetteAuteurs' => $recetteAuteurSelect]);
    }

    public function store($data){
        
        $validator = new Validator;
        $validator->field('titre', $data['titre'], 'Le nom')->min(2)->max(25);
        $validator->field('description', $data['description'])->max(45);
        $validator->field('temps_preparation', $data['temps_preparation'])->max(5);
        $validator->field('temps_cuisson', $data['temps_cuisson'])->max(20);
        $validator->field('recette_categorie_id', $data['recette_categorie_id'])->max(10);
        $validator->field('auteur_id', $data['auteur_id'])->max(10);
        



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
/*         print_r($data);
        die(); */
        if(isset($data['id']) && $data['id']!=null){
            $recette = new Recette;
            $selectId = $recette->selectId($data['id']);

            $recetteCategorie = new RecetteCategorie;
            $recetteCategorieSelect = $recetteCategorie->select();
    
            $recetteAuteur = new Auteur;
            $recetteAuteurSelect = $recetteAuteur->select();

            if($selectId){
                return View::render('recette/edit', ['recette' => $selectId, 'recetteCats' => $recetteCategorieSelect, 'auteurs' => $recetteAuteurSelect]);
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