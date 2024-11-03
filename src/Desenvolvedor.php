<?php 
declare(strict_types = 1);
namespace App;

Class Desenvolvedor extends Colaborador{
  public bool $trabalhando = false;
  public function trabalhar(){
    $this->trabalhando = true;
    return $this;
  }

}
?>