<?php

declare(strict_types=1);
namespace Mowbray;

// To handle $_REQUEST
class Request {

  // Gets a requested page template
  static function page($request) {
    if (empty($request)
      or !is_array($request)
      or empty($request['page'])
      or !is_string($request['page'])
      or !file_exists(__DIR__ . "/../templates/{$request['page']}.php"))
    {
      return 'index.php';
    } else {
      return "{$request['page']}.php";
    }
  }

}

?>
