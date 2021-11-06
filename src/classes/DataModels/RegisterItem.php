<?php

declare(strict_types=1);
namespace Mowbray\DataModels;
require_once 'vendor/autoload.php';

/**
 * Single column in Register
 */
class RegisterItem {
  public ?int $id = null;
  public ?int $register_id = null;
  public ?string $name = null;
  public ?array $checkmarks = null;
}

?>

