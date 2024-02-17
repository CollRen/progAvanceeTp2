<?php
namespace App\Controllers;

use App\Models\Tester;
use App\Providers\View;
use App\Providers\Validator;


class TesterController {

    public function index(){
        $tester = new Tester;
        $select = $tester->select();
        //print_r($select);
        //include('views/tester/index.php');
        if($select){
            return View::render('tester/index', ['testers' => $select]);
        }else{
            return View::render('error');
        }    
    }

    public function show($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $tester = new Tester;
            $selectId = $tester->selectId($data['id']);
            if($selectId){
                return View::render('tester/show', ['tester' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function create(){
        return View::render('tester/create');
    }

    public function store($data){
        
        $validator = new Validator;
        $validator->field('name', $data['name'], 'Le nom')->min(2)->max(25);
        $validator->field('address', $data['address'])->max(45);
        $validator->field('zip_code', $data['zip_code'], 'Zip Code')->max(10);
        $validator->field('phone', $data['phone'])->max(20);
        $validator->field('email', $data['email'])->required()->email()->max(45);

        if($validator->isSuccess()){
            $tester = new Tester;
            $insert = $tester->insert($data);        
            if($insert){
                return View::redirect('tester');
            }else{
                return View::render('error');
            }
        }else{
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('tester/create', ['errors'=>$errors, 'tester' => $data]);
        }
    }

    public function edit($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $tester = new Tester;
            $selectId = $tester->selectId($data['id']);
            if($selectId){
                return View::render('tester/edit', ['tester' => $selectId]);
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
        $validator->field('name', $data['name'], 'Le nom')->min(2)->max(25);
        $validator->field('address', $data['address'])->max(45);
        $validator->field('zip_code', $data['zip_code'], 'Zip Code')->max(10);
        $validator->field('phone', $data['phone'])->max(20);
        $validator->field('email', $data['email'])->required()->email()->max(45);

        if($validator->isSuccess()){
                $tester = new Tester;
                $update = $tester->update($data, $get['id']);

                if($update){
                    return View::redirect('tester/show?id='.$get['id']);
                }else{
                    return View::render('error');
                }
        }else{
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('tester/edit', ['errors'=>$errors, 'tester' => $data]);
        }
    }

    public function delete($data){
        $tester = new  Tester;
        $delete = $tester->delete($data['id']);
        if($delete){
            return View::redirect('tester');
        }else{
            return View::render('error');
        }
    }
}