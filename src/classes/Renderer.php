<?php
  declare(strict_types=1);
  namespace Mowbray;
  require_once 'vendor/autoload.php';

  use \Twig\Environment;
  use \Twig\Loader\FilesystemLoader;

  // To DRY rendering templates
  class Renderer {
    private static FilesystemLoader $loader;
    private static Environment $twig;

    static function render(string $name, array $variables = []) {
      $template = self::getEnvironment()->load("{$name}.twig");
      echo  $template->render($variables);
    }

    private static function getEnvironment(): Environment {
      if (!isset(self::$twig)) {
        self::$loader = new FilesystemLoader('templates');
        self::$twig = new Environment(self::$loader);
      }
      return self::$twig;
    }
  }
?>

