<?php

require 'app/class/Pessoa.php';
require 'app/class/AtividadesPessoa.php';

$pessoa = new AtividadesPessoa;
$pessoa->name = "Gustavo";
$pessoa->age = 30;
$pessoa->email = "teste@teste.com";

echo $pessoa->getData();
echo $pessoa->andar();
echo $pessoa->parar();

?>