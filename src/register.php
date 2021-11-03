<?php
  declare(strict_types=1);
  namespace Mowbray;
  require_once 'vendor/autoload.php';

  use \Mowbray\DataAccess\Registers;
  use \Mowbray\Renderer;

  $register = (new Registers)->get(-1);

  Renderer::render('register', [
    'subtitle' => "{$register->checklist->name} : {$register->name}",
    'register' => $register,
    'scripts' => [
      'popovers'
    ]
  ]);
?>

