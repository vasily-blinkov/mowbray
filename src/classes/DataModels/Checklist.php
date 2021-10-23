<?php

declare(strict_types=1);
namespace Mowbray\DataModels;
require_once '../../vendor/autoload.php';

class Checklist {
  public int $id;
  public string $name;
  public array $rows;
}

?>
