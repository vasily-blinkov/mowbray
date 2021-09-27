<?php
  declare(strict_types=1);
  namespace Mowbray;
  require_once 'vendor/autoload.php';

  use \Mowbray\Request;
  use \Twig\Environment;
  use \Twig\Loader\FilesystemLoader;
?>

<!DOCTYPE html>

<!-- The master page. -->

<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">

<title>Mowbray</title>

<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<?
  $loader = new FilesystemLoader('templates');
  $twig = new Environment($loader);
  $template = $twig->load(Request::page($_REQUEST));
  echo $template->render($_REQUEST);
?>

</body>
</html>
