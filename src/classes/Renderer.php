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

    static function render(string $template): string {
      self::getEnvironment()->render($template);
    }

    private static function getEnvironment(): Environment {
      if (!isset(self::$twig)) {
        self::$loader = new FilesystemLoader('../templates');
        self::$twig = new Environment($loader);
      }
      return self::$twig;
    }
  }
?>
