<?php

class Pessoa {
    //atributos
    public $name;
    public $email;
    public $age;

    //metodos
    public function getData()
    {
        return "Nome: {$this->name}.\nIdade: {$this->age}.\nE-mail: {$this->email}\n";
    }
}

?>