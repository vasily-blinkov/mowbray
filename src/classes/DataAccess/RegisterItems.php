<?php

declare(strict_types=1);
namespace Mowbray\DataAccess;
require_once 'vendor/autoload.php';

use \Mowbray\DataAccess\RegisterItemCheckmarks;
use \Mowbray\DataModels\RegisterItem as RegisterItemModel;

class RegisterItems {
  function get(int $register_id): array {
    $checkmarks = new RegisterItemCheckmarks;

    $three = new RegisterItemModel;
    $three->register_id = $register_id;
    $three->id = 22;
    $three->name = '03';
    $three->checkmarks = $checkmarks->get($three->id);

    $four = new RegisterItemModel;
    $four->register_id = $register_id;
    $four->id = 24;
    $four->name = '04';
    $four->checkmarks = $checkmarks->get($four->id);

    return [$three, $four];
  }
}

?>

