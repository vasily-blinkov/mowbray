<?php

declare(strict_types=1);
namespace Mowbray\DataModels;
require_once 'vendor/autoload.php';

/**
 * Cell on crossing of RegisterItem and ChecklistRow
 */
class RegisterItemCheckmark {
  public ?int $id = null;
  public ?int $checklist_row_id = null;
  public ?int $register_item_id = null;
  public ?int $percent = null; // 100 (%) means done
  public ?string $note = null;
}

?>

