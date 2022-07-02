<?php

namespace Drupal\max_extras\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * MaxExtras does testing stuff.
 */
class MaxExtras extends ControllerBase {

  /**
   * Main.
   *
   * @return array
   *   more stuff here
   */
  public function main() {

    return [
      '#type' => 'markup',
      '#markup' => $this->t('Max extras'),
    ];
  }

}
