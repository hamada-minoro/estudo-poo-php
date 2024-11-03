<?php 
declare(strict_types = 1);
namespace App;

Class Colaborador{
  public int $id;
  public string $nome; 
  public string $cargo;

  public function getId(): int{
    return $this->id;
  }

  public function getNome(): string{
    return $this->nome;
  }

  public function setId(int $id){
   return $this->id = $id;
  }
  public function setNome(string $nome){
    return $this->nome = $nome;
  }
  public function setCargo(string $cargo){
    return $this->cargo= $cargo;
  }

}

?>