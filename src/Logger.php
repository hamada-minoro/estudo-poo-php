<?php 
declare(strict_types = 1);
namespace App;
Class Logger{
  protected \Monolog\Logger $logger;
  public function __construct(){
    $this->logger = new \Monolog\Logger('app');
    $this->logger->pushHandler(
      new StreamHandler( __DIR__ . '/../storage/logs', Level::Warning)
    );
  }
  public static function write(string $message){
    $this->logger->debug($message);
  }
}
?>