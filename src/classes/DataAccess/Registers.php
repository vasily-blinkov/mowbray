<?php

declare(strict_types=1);
namespace Mowbray\DataAccess;
require_once 'vendor/autoload.php';

use \Mowbray\DataAccess\Checklists;
use \Mowbray\DataModels\Register as RegisterModel;
use \Mowbray\DataModels\RegisterItem as RegisterItemModel;

class Registers {
  function get(int $register_id): RegisterModel {
    $register = new RegisterModel;

    $register->id = 2;
    $register->name = 'November 2021';

    $register->checklist_id = -1;
    $register->checklist = (new Checklists)->get($register->checklist_id);

    $three = new RegisterItemModel;
    $three->register_id = $register->id;
    $three->id = 22;
    $three->name = '03';

    $four = new RegisterItemModel;
    $four->register_id = $register->id;
    $four->id = 24;
    $four->name = '04';

    $register->items = [$three, $four];

    return $register;
  }
}

?>

