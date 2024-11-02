<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<div>
  <h2>Constantes</h2>
  <?php 
    Class MyExampleWithConstants{
      public const MY_CONSTANT = 'Something';
    }
  ?>
  <br><br>
  <?= MyExampleWithConstants::MY_CONSTANT ?>
</div>
<br><br>
<div>
  <h2>Self</h2>
  <?php 
    Class MyExampleWithSelf{
      protected const MESSAGE = 'Exemplo Self';
      public function showMessage(){
        return self::MESSAGE;
      }
    }
  ?>
  <br>
  <?= (new MyExampleWithSelf())->showMessage() ?>

</div>
<br><br>
<div>
  <h2>Static</h2>
    <?php 
      Class MySuperStaticComponent {
        public static function who() : string {
          return __CLASS__;
        }

        public static function greetings() : string {
          return 'Hello from ' . self::who();
        }
      }
      Class MyStaticComponent extends MySuperStaticComponent{
        public static function who() : string{
          return __CLASS__;
        }
      }
    ?>
    <br>
    <?= MySuperStaticComponent :: greetings() ?>
    <br>
    <?= MyStaticComponent :: greetings() ?>
</div>
<br><br>
<div>
<h2>Parent</h2>
      <?php 
        Class Vehicle {
          protected bool $started = false;
          public function startEngine() : void {
            $this->started = true;
          }
        }

        Class Car extends Vehicle{
          protected $isOnNeutral = false;
          public function startEngine() : void{
              $this->isOnNeutral = true;
              parent::startEngine();
          }
        }
      ?>
      <br>
      <?php 
        $car = new Car();
        var_dump($car);
        $car -> startEngine();
      ?>
      <br>
      <?= var_dump($car) ?>

</div>
  
</body>
</html>