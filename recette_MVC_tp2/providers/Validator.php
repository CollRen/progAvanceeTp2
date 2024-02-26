<?php
namespace App\Providers;

class Validator {
    private $errors = array();
    private $key;
    private $value;
    private $name;

    public function field($key, $value, $name = null){
        $this->key= $key;
        $this->value= $value;
        if($name == null){
            $this->name = ucfirst($key);
        }else{
            $this->name = ucfirst($name);
        }
        return $this;
    }
////////////// VALIDATION RULES  ////////////////////////////
    public function required() {
        if(empty($this->value)){
            $this->errors[$this->key]="Le champ $this->name est requis.";
        }
        return $this;
    }

    public function max($length){
        if(strlen($this->value) > $length){
            $this->errors[$this->key]="Le champ $this->name doit être de moins de $length caractères";
        }
        return $this;
    }

    public function min($length){
        if(strlen($this->value) < $length){
            $this->errors[$this->key]="Le champ $this->name doit contenir de plus de $length caractères";
        }
        return $this;
    }

    public function number() {
        if (!empty($this->value) && !is_numeric($this->value)) {
            $this->errors[$this->key]="Le champ $this->name Doit être de type 'number'.";
        }
        return $this;
    }
    
    public function int(){
        if(!filter_var($this->value, FILTER_VALIDATE_INT)){
            $this->errors[$this->key]="Le champ $this->name doit être de type 'interger'.";
        } 
        return $this;
    }

    public function float(){
        if(!filter_var($this->value, FILTER_VALIDATE_FLOAT)){
            $this->errors[$this->key]="Le champ $this->name doit être 'decimal'.";
        } 
        return $this;
    }

    public function bigger($limit) {
        if ($this->value >= $limit) {
            $this->errors[$this->key]="Le champ $this->name doit être plus petit ou égal à $limit.";
        }
        return $this;
    }

    public function lower($limit) {
        if ($this->value <= $limit) {
            $this->errors[$this->key]="Le champ $this->name doit être plus grand ou égal à $limit.";
        }
        return $this;
    }

    public function email() {
        if(!empty($this->value) && !filter_var($this->value, FILTER_VALIDATE_EMAIL)){
            $this->errors[$this->key] = "Ce format $this->name est invalide";
        }
        return $this;
    }
////////////////////////////////////////////////////////
    public function isSuccess(){
        if(empty($this->errors)) return true;
    }

    public function getErrors(){
        if(!$this->isSuccess()) return $this->errors;
    }


}
