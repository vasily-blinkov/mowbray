<?php

declare(strict_types=1);
namespace Mowbray\DataAccess;
require_once 'vendor/autoload.php';

use \Mowbray\DataAccess\Checklists;
use \Mowbray\DataAccess\RegisterItems;
use \Mowbray\DataModels\Register as RegisterModel;
use \Mowbray\DataModels\RegisterItem as RegisterItemModel;

class Registers {
  function get(int $register_id): RegisterModel {
    $register = new RegisterModel;
    $register->name = 'November 2021';

    $register->checklist_id = -1;
    $register->checklist = (new Checklists)->get($register->checklist_id);

    $register->id = 2;
    $register->items = (new RegisterItems)->get($register->id);

    return $register;
  }
}

?>

