<?php 
class Gerente extends Pessoa{
  public function setProfissao(string $profissao){
    return $this->profissao = $profissao;
  }
  public function trabalhar(){
    $this->trabalhando = true;
    return $this;
  }


}




?>