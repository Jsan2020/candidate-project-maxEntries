<?php

namespace Drupal\max_extras;

/**
 * Electronics base class.
 */
class MaxExtrasElectronicItem {
  /**
   * The price of the electronic.
   *
   * @var float
   */
  public $price;

  /**
   * The type of electronic.
   *
   * @var string
   */
  private $type;
  /**
   * Is the electronic wired.
   *
   * @var bool
   */
  public $wired;

  const TYPES = ['console', 'microwave', 'television', 'controller'];

  /**
   * Gets the price.
   *
   * @return float
   *   returns price of electronic
   */
  public function getPrice() {
    return $this->price;
  }

  /**
   * Gets the type.
   *
   * @return float
   *   returns type of electronic
   */
  public function getType() {
    return $this->type;
  }

  /**
   * Is the electronic wired.
   *
   * @return float
   *   returns true if product is wired
   */
  public function getWired() {
    return $this->wired;
  }

  /**
   * Sets the price.
   *
   * @param mixed $price
   *   The price of the item.
   */
  public function setPrice($price) {
    $this->price = $price;
  }

  /**
   * Sets the price.
   *
   * @param mixed $type
   *   The item type.
   */
  public function setType($type) {
    $this->type = $type;
  }

  /**
   * Sets the price.
   *
   * @param mixed $wired
   *   The wired status of the item.
   */
  public function setWired($wired) {
    $this->wired = $wired;
  }

}
