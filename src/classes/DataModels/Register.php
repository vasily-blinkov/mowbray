<?php

declare(strict_types=1);
namespace Mowbray\DataModels;
require_once 'vendor/autoload.php';

use \Mowbray\DataModels\Checklist as ChecklistModel;

/**
 * Instance of Checklist
 */
class Register {
  public int $id;
  public int $checklist_id;
  public ChecklistModel $checklist;
  public string $name;
  public array $items;
}

?>

