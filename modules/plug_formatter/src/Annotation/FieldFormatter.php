<?php

/**
 * @file
 * Contains \Drupal\plug_formatter\Annotation\FieldFormatter.
 */

namespace Drupal\plug_formatter\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a FieldFormatter annotation object.
 *
 * @ingroup plug_example_api
 *
 * @Annotation
 */
class FieldFormatter extends Plugin {

  /**
   * The formatter type ID.
   *
   * @var string
   */
  public $id;

  /**
   * The human-readable name of the formatter type.
   * @var string
   */
  public $label;

  /**
   * A short description for the formatter type.
   *
   * @var string
   */
  public $description;

  /**
   * An array of field types the formatter supports.
   *
   * @var string[]
   */
  public $field_types;

}
