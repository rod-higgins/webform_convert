<?php

namespace Drupal\webform_convert\Plugin\RulesAction;

use Drupal\rules\Core\RulesActionBase;

/**
 * Action for deletion of a webform submission.
 *
 * The action edit page is not displayed to a user and a user doesn't input
 * any values. "webform_info" context is mapping programmatically.
 *
 * @RulesAction(
 *   id = "delete_webform_submission",
 *   label = @Translation("Delete webform submission"),
 *   category = @Translation("A Webform"),
 *   context_definitions = {
 *     "webform_info" = @ContextDefinition("webform_info",
 *       label = @Translation("Webform info")
 *     )
 *   }
 * )
 */
class DeleteWebformSubmission extends RulesActionBase {

  /**
   * Delete the submission of the selected webform.
   *
   * @param array $webform_info
   *   Array with information about webform submission data.
   */
  protected function doExecute(array $webform_info) {
    $webform_info['submission']->delete();
    \Drupal::state()->delete('webform_convert.submission');
  }

}
