<?php

declare(strict_types=1);
namespace Mowbray\DataAccess;
require_once 'vendor/autoload.php';

use \Mowbray\DataModels\Checklist as ChecklistModel;
use \Mowbray\DataModels\ChecklistRow as ChecklistRowModel;

class Checklists {
  function get(int $checklist_id): ChecklistModel {
    $checklist = new ChecklistModel;
    
    $checklist->id = $checklist_id;
    $checklist->name = 'Daily schedule';
    $checklist->rows = (new ChecklistRows)->get($checklist_id);
    
    return $checklist;
  }
}

?>
