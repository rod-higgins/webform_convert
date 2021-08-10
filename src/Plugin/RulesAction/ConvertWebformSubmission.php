<?php

namespace Drupal\webform_convert\Plugin\RulesAction;

use Drupal\rules\Core\RulesActionBase;
use Drupal\Core\Password\PasswordGeneratorInterface;

/**
 * Action for converting a webform submission to user entity.
 *
 * The action edit page is not displayed to a user and a user doesn't input
 * any values. "webform_info" context is mapping programmatically. If the rule
 * selects a webform that doesn't have the required fields the user entity is
 * created without those values.
 *
 * @RulesAction(
 *   id = "convert_webform_submission",
 *   label = @Translation("Convert webform submission"),
 *   category = @Translation("A Webform"),
 *   context_definitions = {
 *     "webform_info" = @ContextDefinition("webform_info",
 *       label = @Translation("Webform info")
 *     )
 *   }
 * )
 */
class ConvertWebformSubmission extends RulesActionBase {

  /**
   * Convert the submission of the selected webform.
   *
   * @param array $webform_info
   *   Array with information about webform submission data.
   */
  protected function doExecute(array $webform_info) {
    $values = $webform_info['submission']->getData();
    // create and save user entity
    $user = \Drupal\user\Entity\User::create();
    $user->setPassword(PasswordGeneratorInterface::generate());
    $user->enforceIsNew();
    $user->setEmail($values['email']);
    $user->setUsername($values['first_name'] . '.' . $values['last_name']);
    $user->set("field_first_name", $values['first_name']);
    $user->set("field_last_name", $values['last_name']);
    try {
      $user->save();
    } catch (Exception $e) {
      // Generic exception handling, ignore errors.
      \Drupal::logger('webform_convert')->error($e->getMessage());
    }
  }
}
