<?php

declare(strict_types=1);
namespace Mowbray\Utils;
require_once 'vendor/autoload.php';

class ArrayUtils {
  static function array_find(array $haystack, array $predicate, ...$args) {
    $result = NULL;

    foreach ($haystack as $item) {
      if (call_user_func($predicate, $item, ...$args)) {
        $result = $item;
        $break;
      }
    }

    return $result;
  }
}

?>

