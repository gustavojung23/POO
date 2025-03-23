<?php 

class AtividadesPessoa extends Pessoa {
    public function andar()
    {
        return "{$this->name} está andando!\n";
    }

    public function parar()
    {
        return "{$this->name} está parando!\n";
    }
}