<?php

declare(strict_types=1);
namespace Mowbray\DataModels;
require_once 'vendor/autoload.php';

class ChecklistRow {
  public ?int $id = null;
  public ?int $checklist_id = null;
  public ?string $name = null;
}

?>
