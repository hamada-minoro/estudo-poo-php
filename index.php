<!DOCTYPE html>
<html lang="en">
  <?php $title = 'Classes - Início'?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
</head>
<body>
  <h1><?= $title ?></h1>
  <div>
    <h1>Aulas</h1>
    <a href="Constantes.php">Constantes</a>
  </div>

<div>
  <h1>Classes, Herança e Polimorfismo</h1>
 <?php 
 include 'ClassFuncionario.php';
 include 'ClassGerente.php';
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