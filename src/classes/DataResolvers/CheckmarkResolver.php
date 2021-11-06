<?php

declare(strict_types=1);
namespace Mowbray\DataResolvers;
require_once 'vendor/autoload.php';

use \Mowbray\DataModels\ChecklistRow as ChecklistRowModel;
use \Mowbray\DataModels\RegisterItem as RegisterItemModel;
use \Mowbray\DataModels\RegisterItemCheckmark as RegisterItemCheckmarkModel;
use \Mowbray\Utils\ArrayUtils;

class CheckmarkResolver {
  function get(array $checkmarks, int $row_id) {
    return ArrayUtils::array_find($checkmarks, [$this, 'predicate'], $row_id);
  }

  function predicate(RegisterItemCheckmarkModel $checkmark, int $row_id): bool {
    return $checkmark->checklist_row_id === $row_id;
  }
}

?>

