<?php
  declare(strict_types=1);
  namespace Mowbray;
  require_once 'vendor/autoload.php';

  use \Mowbray\DataAccess\Registers;
  use \Mowbray\DataResolvers\CheckmarkResolver;
  use \Mowbray\Renderer;

  $register = (new Registers)->get(-1);
  $checkmark_resolver = new CheckmarkResolver;

  Renderer::render('register', [
    'subtitle' => "{$register->checklist->name} : {$register->name}",
    'register' => $register,
    'checkmark_resolver' => $checkmark_resolver,
    'scripts' => [
      'popovers'
    ]
  ]);
?>

