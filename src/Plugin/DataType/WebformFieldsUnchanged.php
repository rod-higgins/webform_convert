<?php

namespace Drupal\webform_convert\Plugin\DataType;

use Drupal\Core\TypedData\Plugin\DataType\Map;

/**
 * The "webform_fields_unchanged" data type.
 *
 * @ingroup typed_data
 *
 * @DataType(
 *   id = "webform_fields_unchanged",
 *   label = @Translation("Webform Fields Unchanged"),
 *   definition_class = "Drupal\webform_convert\WebformFieldsUnchangedDataDefinition"
 * )
 */
class WebformFieldsUnchanged extends Map {
}
