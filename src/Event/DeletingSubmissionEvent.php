<?php

namespace Drupal\webform_convert\Event;

/**
 * Event that is fired when webform submission is deleting.
 *
 * The event object will be created and the event will be dispatched
 * in hook_webform_submission_delete().
 */
class DeletingSubmissionEvent extends WebformConvertEventBase {
  const EVENT_NAME = 'deleting_submission';
}
