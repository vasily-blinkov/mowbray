<?php
  declare(strict_types=1);
  namespace Mowbray;
  require_once 'vendor/autoload.php';

  use \Mowbray\DataAccess\Checklists;
  use \Mowbray\Renderer;

  $checklist = (new Checklists)->get(-1);

  Renderer::render('chklst', [
    'subtitle' => "Checklist: {$checklist->name}",
    'checklist' => $checklist
  ]);
?>

