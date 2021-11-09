<?php

declare(strict_types=1);
namespace Mowbray\DataAccess;
require_once 'vendor/autoload.php';

use \Mowbray\DataModels\RegisterItemCheckmark as RegisterItemCheckmarkModel;

class RegisterItemCheckmarks {
  private array $percents = [0, 25, 50, 75, 100];

  function get(int $register_item_id): array {
    $morning_pt = $this->get_morning_pt($register_item_id);
    $upskilling = $this->get_upskilling($register_item_id);
    $soft = $this->get_soft($register_item_id);
    $shower = $this->get_shower($register_item_id);
    $news = $this->get_news($register_item_id);

    $checkmarks = [ $morning_pt, $upskilling, $soft, $shower, $news ];
    return $checkmarks;
  }

  private function get_morning_pt(int $register_item_id): RegisterItemCheckmarkModel {
    $morning_pt = new RegisterItemCheckmarkModel;
    $morning_pt->id = -23 + $register_item_id;
    $morning_pt->checklist_row_id = -9;
    $morning_pt->register_item_id = $register_item_id;
    $morning_pt->percent = $this->get_percent();
    $morning_pt->note = '';
    return $morning_pt;
  }

  private function get_upskilling(int $register_item_id): RegisterItemCheckmarkModel {
    $upskilling = new RegisterItemCheckmarkModel;
    $upskilling->id = -23 + $register_item_id + 1 * ($register_item_id > 23 ? 1 : -1);
    $upskilling->checklist_row_id = -8;
    $upskilling->register_item_id = $register_item_id;
    $upskilling->percent = $this->get_percent();
    $upskilling->note = '';
    return $upskilling;
  }

  private function get_soft(int $register_item_id): RegisterItemCheckmarkModel {
    $soft = new RegisterItemCheckmarkModel;
    $soft->id = -23 + $register_item_id + 2 * ($register_item_id > 23 ? 1 : -1);
    $soft->checklist_row_id = -7;
    $soft->register_item_id = $register_item_id;
    $soft->percent = $this->get_percent();
    $soft->note = '';
    return $soft;
  }

  private function get_shower(int $register_item_id): RegisterItemCheckmarkModel {
    $shower = new RegisterItemCheckmarkModel;
    $shower->id = -23 + $register_item_id + 3 * ($register_item_id > 23 ? 1 : -1);
    $shower->checklist_row_id = -6;
    $shower->register_item_id = $register_item_id;
    $shower->percent = $this->get_percent();
    $shower->note = '';
    return $shower;
  }

  private function get_news(int $register_item_id): RegisterItemCheckmarkModel {
    $news = new RegisterItemCheckmarkModel;
    $news->id = -23 + $register_item_id + 4 * ($register_item_id > 23 ? 1 : -1);
    $news->checklist_row_id = -5;
    $news->register_item_id = $register_item_id;
    $news->percent = $this->get_percent();
    $news->note = '';
    return $news;
  }

  private function get_percent(): int {
    $index = rand(0, 4);
    return $this->percents[$index];
  }
}

?>
