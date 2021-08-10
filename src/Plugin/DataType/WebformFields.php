<?php

namespace Drupal\webform_convert\Plugin\DataType;

use Drupal\Core\TypedData\Plugin\DataType\Map;

/**
 * The "webform_fields" data type.
 *
 * @ingroup typed_data
 *
 * @DataType(
 *   id = "webform_fields",
 *   label = @Translation("Webform Fields"),
 *   definition_class = "Drupal\webform_convert\WebformFieldsDataDefinition"
 * )
 */
class WebformFields extends Map {
}
