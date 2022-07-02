<?php

/**
 * @file
 * Establishes scenarios to for MaxExtras functionality.
 */

require_once "MaxExtrasConsole.php";

/**
 * Returns all scenarios.
 *
 * @return scenarios
 *   All scenarios.
 */
function max_entries_scenarios() {
  /* sale 1 */
  $console = new Console(500);

  $scenarios = [$console];

  return $scenarios;
}
