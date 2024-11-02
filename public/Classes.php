<?php declare(strict_types = 1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div>
  <h1>Classes, Herança e Polimorfismo</h1>
 <?php 
require __DIR__ . '/../vendor/autoload.php';
use App\ClassFuncionario;
use App\ClassGerente;
   $pessoa1 = new Funcionario(
    1, 
    'Lucas', 
    '12345678901'
  );
  $pessoa2 = new Gerente(
    2, 
    'Lucas', 
    '12345678901'
  );
  var_dump( $pessoa1);
  echo'<br><br>';
  var_dump( $pessoa2);
  echo'<br><br>';
  
  $pessoa1->setCpf('12345678901');
  $pessoa1->setNome('Mauricio');

  $pessoa1->setProfissao('Soldador');
  $pessoa2->setProfissao('RH');
  $pessoa1->trabalhar();
  $pessoa2->trabalhar();
  
  var_dump( $pessoa1);
  echo'<br><br>';
  var_dump( $pessoa2);
 ?>
 </div>
</body>
</html>