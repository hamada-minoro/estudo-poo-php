<?php 
declare(strict_types = 1); 
require __DIR__ . '/../vendor/autoload.php';
use App\Greetings;
use App\Colaborador;
use App\Desenvolvedor;
use App\Gerente;
?>
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
  $greetings = new Greetings();
  echo $greetings->message('Minoro');
  echo '<br><br>';
  $pessoa1 = new Desenvolvedor();
  $pessoa2 = new Gerente();
  var_dump( $pessoa1);
  echo'<br><br>';
  var_dump( $pessoa2);
  echo'<br><br>';
  
  $pessoa1->setId(1234);
  $pessoa1->setNome('Mauricio');
  $pessoa1->setCargo('Senior');

  $pessoa2->setId(1235);
  $pessoa2->setNome('José');  
  $pessoa2->setCargo('Gerente RH');

  $pessoa1->trabalhar();
  $pessoa2->trabalhar();
  
  var_dump( $pessoa1);
  echo'<br><br>';
  var_dump( $pessoa2);
 ?>
 </div>
</body>
</html>