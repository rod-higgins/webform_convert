<?php

namespace Drupal\webform_convert\Event;

/**
 * Event that is fired when webform submission is viewing.
 *
 * The event object will be created and the event will be dispatched
 * in hook_webform_submission_view().
 */
class ViewingSubmissionEvent extends WebformConvertEventBase {
  const EVENT_NAME = 'viewing_submission';
}
