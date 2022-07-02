<?php

namespace Drupal\max_extras\MaxExtrasConsole;

use Drupal\max_extras\MaxExtrasElectronicItem;

/**
 * Electronic type Console.
 */
class MaxExtrasConsole extends MaxExtrasElectronicItem {

  /**
   * Console constructor.
   *
   * @param float $price
   *   Price of electronic.
   *
   * @return void
   */
  public function __construct($price) {
    $this->setType(self::ELECTRONIC_ITEM_CONSOLE);
    $this->setPrice($price);
    $this->setWired(TRUE);
  }

}
