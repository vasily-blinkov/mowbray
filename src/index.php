<?php
  declare(strict_types=1);
  namespace Mowbray;
  require_once 'vendor/autoload.php';

  use \Mowbray\Request;
  use \Twig\Environment;
  use \Twig\Loader\FilesystemLoader;
?>

<?
  $loader = new FilesystemLoader('templates');
  $twig = new Environment($loader);
  echo $twig->render(Request::page($_REQUEST), $_REQUEST);
?>

