<?php

/**
 * @file
 * Contains \Drupal\plug_formatter\Annotation\FieldType.
 */

namespace Drupal\plug_field\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a FieldType annotation object.
 *
 * @ingroup plug_example_api
 *
 * @Annotation
 */
class FieldType extends Plugin {

  /**
   * The formatter type ID.
   *
   * @var string
   */
  public $id;

  /**
   * The human-readable name of the field type.
   * @var string
   */
  public $label;

  /**
   * A short description for the field type.
   *
   * @var string
   */
  public $description;

  /**
   * An array whose keys are the names of the settings available for the field
   * type, and whose values are the default values for those settings.
   *
   * @var array
   */
  public $settings;

  /**
   * An array whose keys are the names of the settings available for instances
   * of the field type, and whose values are the default values for those
   * settings. Instance-level settings can have different values on each field
   * instance, and thus allow greater flexibility than field-level settings. It
   * is recommended to put settings at the instance level whenever possible.
   * Notable exceptions: settings acting on the schema definition, or settings
   * that Views needs to use across field instances (for example, the list of
   * allowed values).
   *
   * @var array
   */
  public $instance_settings;

  /**
   * The machine name of the default widget to be used by instances of this
   * field type, when no widget is specified in the instance definition. This
   * widget must be available whenever the field type is available (i.e.
   * provided by the field type module, or by a module the field type module
   * depends on).
   *
   * @var string
   */
  public $default_widget;

  /**
   * The machine name of the default formatter to be used by instances of this
   * field type, when no formatter is specified in the instance definition. This
   * formatter must be available whenever the field type is available (i.e.
   * provided by the field type module, or by a module the field type module
   * depends on).
   *
   * @var string
   */
  public $default_formatter;

  /**
   * (optional) A boolean specifying that users should not be allowed to create
   * fields and instances of this field type through the UI. Such fields can
   * only be created programmatically with field_create_field() and
   * field_create_instance(). Defaults to FALSE.
   *
   * @var bool
   */
  public $no_ui;

}
