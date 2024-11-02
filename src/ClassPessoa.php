<?php 
declare(strict_types = 1);
  namespace src;
  class Pessoa {
    protected int $id;
    public string $nome; 
    public string $cpf;
    protected string $profissao;

 

  public function getId(): int{
    return $this->id;
  }

  public function getNome(): string{
    return $this->nome;
  }

  public function getCpf(): string{
    return $this->cpf;
  }

  public function setId(int $id){
   return $this->id;
  }
  public function setNome(string $nome){
    return $this->nome = $nome;
  }
  public function setCpf(string $cpf){
    return $this->cpf= $cpf;
  }

}




?>