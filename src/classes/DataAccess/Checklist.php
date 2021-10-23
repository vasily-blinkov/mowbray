<?php

declare(strict_types=1);
namespace Mowbray\DataAccess;
require_once '../../vendor/autoload.php';

use \Mowbray\DataModels\Checklist as ChecklistModel;
use \Mowbray\DataModels\ChecklistRow as ChecklistRowModel;

class Checklist {
  function get(int $id): ChecklistModel {
    $checklist = new Checklist;
    
    $checklist->id = $id;
    $checklist->name = 'Daily schedule';

    $morning_pt = new ChecklistRowModel;
    $morning_pt->id = 10 * $id + 1;
    $morning_pt->checklist_id = $checklist->id;
    $morning_pt->name = 'Утренняя зарядка';

    $upskilling = new ChecklistRowModel;
    $upskilling->id = 10 * $id + 2;
    $upskilling->checklist_id = $checklist->id;
    $upskilling->name = 'Повышение квалификации';

    $checklist->rows = [ $morning_pt, $upskilling ];
    
    return $checklist;
  }
}

?>
