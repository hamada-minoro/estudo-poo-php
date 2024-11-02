<?php 
declare(strict_types = 1);
namespace App;
include 'ClassPessoa.php';

class Funcionario extends Pessoa {
  protected bool $trabalhando = false;
  
  public function setProfissao(string $profissao){
    return $this->profissao = $profissao;
  }

  public function trabalhar(){
    $this->trabalhando = true;
    return $this;
  }
}

?>