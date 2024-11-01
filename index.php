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
 <?php 
 include 'ClassFuncionario.php';
 include 'ClassGerente.php';
   $pessoa1 = new Funcionario(
    1, 
    'Lucas', 
    '12345678901'
  );

  var_dump( $pessoa1);

  echo'<br>';

  $pessoa1->setNome('Mauricio');
  
  var_dump( $pessoa1);

  $pessoa1->setProfissao('Soldador');

  echo'<br>';

  $pessoa1->trabalhar();
  
  var_dump( $pessoa1);
 ?>
  
</body>
</html>