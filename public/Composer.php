<?php
declare(strict_types=1);
require __DIR__ . '/../vendor/autoload.php';
use App\Greetings;
use App\Logger;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Composer</title>
</head>
<body>


<?php

$greetings = new Greetings();
echo $greetings->message('Minoro Hamada');
(new Logger())->write('Minoro accessed the aplication');

?>
  
</body>
</html>