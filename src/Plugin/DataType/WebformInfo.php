<?php

namespace Drupal\webform_convert\Plugin\DataType;

use Drupal\Core\TypedData\Plugin\DataType\Map;

/**
 * The "webform_info" data type.
 *
 * @ingroup typed_data
 *
 * @DataType(
 *   id = "webform_info",
 *   label = @Translation("Webform info"),
 *   definition_class = "Drupal\webform_convert\WebformInfoDataDefinition"
 * )
 */
class WebformInfo extends Map {
}
