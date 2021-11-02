<?php

declare(strict_types=1);
namespace Mowbray\DataModels;
require_once 'vendor/autoload.php';

/**
 * Cell on crossing of RegisterItem and ChecklistRow
 */
class RegisterItemCheckmark {
  public int $id;
  public int $checklist_row_id;
  public int $register_item_id;
  public int $percent; // 100 (%) means done
  public string $note;
}

?>

