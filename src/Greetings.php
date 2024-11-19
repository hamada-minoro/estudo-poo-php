<?php 
declare(strict_types = 1);
namespace App;

 class Greetings{
  public function message(string $name): string{
    return "Olá  ".$name.", Seja Bem Vindo";
  }
 }



?>