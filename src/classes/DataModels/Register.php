<?php

declare(strict_types=1);
namespace Mowbray\DataModels;
require_once 'vendor/autoload.php';

use \Mowbray\DataModels\Checklist as ChecklistModel;

/**
 * Instance of Checklist
 */
class Register {
  public ?int $id = null;
  public ?int $checklist_id = null;
  public ?ChecklistModel $checklist = null;
  public ?string $name = null;
  public ?array $items = null;
}

?>

