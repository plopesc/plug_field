<?php

/**
 * @file
 * Contains \Drupal\plug_widget\PlugFieldWidgetManager.
 */

namespace Drupal\plug_widget;

use Drupal\plug_field\PlugFieldManagerBase;

class PlugFieldWidgetManager extends PlugFieldManagerBase {

  /**
   * Constructs PlugFieldWidgetManager.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \DrupalCacheInterface $cache_backend
   *   Cache backend instance to use.
   */
  public function __construct(\Traversable $namespaces, \DrupalCacheInterface $cache_backend) {
    parent::__construct('Plugin/Field/FieldWidget', $namespaces, 'Drupal\plug_widget\Plugin\Field\FieldWidget\FieldWidgetInterface', '\Drupal\plug_widget\Annotation\FieldWidget');
    $this->setCacheBackend($cache_backend, 'field_widget_plugins');
    $this->alterInfo('field_widget_plugin');
  }

  /**
   * {@inheritdoc}
   */
  protected function findDefinitions() {
    $definitions = parent::findDefinitions();
    // Convert "field_types" key to "field types", given that annotations don't
    // allow spaces and add default settings.
    foreach ($definitions as &$definition) {
      $definition['field types'] = $definition['field_types'];
      unset($definition['field_types']);
      $definition['settings'] = call_user_func_array(array($definition['class'], 'defaultSettings'),array());
    }
    return $definitions;
  }

}
