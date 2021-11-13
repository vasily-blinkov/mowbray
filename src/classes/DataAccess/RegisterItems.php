<?php

declare(strict_types=1);
namespace Mowbray\DataAccess;
require_once 'vendor/autoload.php';

use \Mowbray\DataAccess\RegisterItemCheckmarks;
use \Mowbray\DataModels\RegisterItem as RegisterItemModel;

class RegisterItems {
  function get(int $register_id): array {
    $items = [];

    for ($day = 1; $day <= 12; $day++) {
      $items[] = $this->get_item($day, $register_id);
    }

    return $items;
  }

  private function get_item(int $day, int $register_id): RegisterItemModel {
    $item = new RegisterItemModel;
    $item->register_id = $register_id;
    $item->id = 24 + $day;
    $item->name = str_pad(strval($day), 2, '0', STR_PAD_LEFT);
    $item->checkmarks = (new RegisterItemCheckmarks)->get($item->id);

    return $item;
  }
}

?>

