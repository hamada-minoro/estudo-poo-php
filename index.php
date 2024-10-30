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
   $pessoa = new Funcionario(
    1, 
    'Lucas', 
    '12345678901'
  );

  var_dump( $pessoa);

  echo'<br>';

  $pessoa->setNome('Mauricio');
  
  var_dump( $pessoa);

  $pessoa->setProfissao('Soldador');

  echo'<br>';
  
  var_dump( $pessoa);
 ?>
  
</body>
</html>