<?php 
include 'ClassPessoa.php';

class Funcionario extends Pessoa {
  public function setProfissao(string $profissao){
    return $this->profissao = $profissao;
  }
}

?>