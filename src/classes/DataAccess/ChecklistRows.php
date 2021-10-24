<?php

declare(strict_types=1);
namespace Mowbray\DataAccess;
require_once 'vendor/autoload.php';

use \Mowbray\DataModels\ChecklistRow as ChecklistRowModel;

class ChecklistRows {
  function get(int $checklist_id): array {
    $morning_pt = new ChecklistRowModel;
    $morning_pt->id = 10 * $checklist_id + 1;
    $morning_pt->checklist_id = $checklist_id;
    $morning_pt->name = 'Утренняя зарядка';

    $upskilling = new ChecklistRowModel;
    $upskilling->id = 10 * $checklist_id + 2;
    $upskilling->checklist_id = $checklist_id;
    $upskilling->name = 'Повышение квалификации';

    return [ $morning_pt, $upskilling ];
  }
}

?>
