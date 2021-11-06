<?php

declare(strict_types=1);
namespace Mowbray\DataAccess;
require_once 'vendor/autoload.php';

use \Mowbray\DataModels\RegisterItemCheckmark as RegisterItemCheckmarkModel;

class RegisterItemCheckmarks {
  function get(int $register_item_id): array {
    $morning_pt = new RegisterItemCheckmarkModel;
    $morning_pt->id = -1;
    $morning_pt->checklist_row_id = -9;
    $morning_pt->register_item_id = $register_item_id;
    $morning_pt->percent = 0;
    $morning_pt->note = '';

    $upskilling = new RegisterItemCheckmarkModel;
    $upskilling->id = -2;
    $upskilling->checklist_row_id = -8;
    $upskilling->register_item_id = $register_item_id;
    $upskilling->percent = 25;
    $upskilling->note = '';

    $soft = new RegisterItemCheckmarkModel;
    $soft->id = -3;
    $soft->checklist_row_id = -7;
    $soft->register_item_id = $register_item_id;
    $soft->percent = 50;
    $soft->note = '';

    $shower = new RegisterItemCheckmarkModel;
    $shower->id = -4;
    $shower->checklist_row_id = -6;
    $shower->register_item_id = $register_item_id;
    $shower->percent = 75;
    $shower->note = '';

    $news = new RegisterItemCheckmarkModel;
    $news->id = -5;
    $news->checklist_row_id = -5;
    $news->register_item_id = $register_item_id;
    $news->percent = 100;
    $news->note = '';
    
    return [ $morning_pt, $upskilling, $soft, $shower, $news ];
  }
}

?>
