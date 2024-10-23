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
  
    class Pessoa{

      public function __construct(
        protected int $id, 
        public string $nome, 
        public int $cpf){
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getId(): int{
      return $this->id;
    }

    public function getNome(): string{
      return $this->nome;
    }

    public function getCpf(): string{
      return $this->cpf;
    }

    public function setId(int $id): Pessoa{
     return $this->id;
    }
    public function setNome(string $nome): Pessoa{
      return $this->nome = $nome;
    }
    public function setCpf(string $cpf): Pessoa{
      return $this->cpf;
    }

  }

    $pessoa = new Pessoa(1, 'Lucas', '12345678901');
    var_dump( $pessoa);

    $pessoa->setNome('Mauricio');
    var_dump( $pessoa);

  ?>
  
</body>
</html>