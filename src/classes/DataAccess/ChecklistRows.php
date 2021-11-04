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

    $soft = new ChecklistRowModel;
    $soft->id = 10 * $checklist_id + 3;
    $soft->checklist_id = $checklist_id;
    $soft->name = 'Изучение программного обеспечения электроников';

    $shower = new CheckListRowModel;
    $shower->id = 10 * $checklist_id + 4;
    $shower->checklist_id = $checklist_id;
    $shower->name = 'Приём душа';

    $news = new ChecklistRowModel;
    $news->id = 10 * $checklist_id + 5;
    $news->checklist_id = $checklist_id;
    $news->name = 'Посмотреть новости';

    return [ $morning_pt, $upskilling, $soft, $shower, $news ];
  }
}

?>
