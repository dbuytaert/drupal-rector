<?php

namespace Drupal\rector_examples;

/**
 * Example of updated static method calls from a class.
 */
class FormatDateStaticUpdated {

  /**
   * A simple example using the minimum number of arguments.
   */
  public function simple_example() {
    $formatted_date = \Drupal::service('date.formatter')->format(123456);
  }

  /**
   * An example using all of the arguments.
   */
  public function using_all_arguments() {
    $formatted_date = \Drupal::service('date.formatter')->format(time(), 'custom', 'Y M D', 'America/Los_Angeles', 'en-us');
  }

}
