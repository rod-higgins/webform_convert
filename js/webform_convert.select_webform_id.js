/**
 * @file
 * Display select 'webform_id' element if 'webform submit' event has been
 * selected. (The 'webform_id' select element is initialy hidden in the
 * 'webform_convert.module').
 */

(function ($, Drupal) {
  Drupal.behaviors.webformConvert = {
    attach: function (context) {
      $(context).find('#edit-events-0-event-name').once().each(function () {
        $(this).change(function () {
          // Events supported by the module.
          var webform_events = [
            'webform_submit',
            'updating_submission',
            'deleting_submission',
            'viewing_submission',
          ];

          if (webform_events.includes(this.value)) {
            $("[for='edit-webform-id']").show();
            $('#edit-webform-id').show();
            $("[for='edit-webform-id']").addClass('js-form-required form-required');
            $('#edit-webform-id').attr('required', 'required');
            $('#edit-webform-id').attr('aria-required', true);
          }
          else {
            $("[for='edit-webform-id']").hide();
            $('#edit-webform-id').hide();
            $('#edit-webform-id').removeAttr('required');
            $('#edit-webform-id').removeAttr('aria-required');
          }
        });
      });
    }
  };
})(jQuery, Drupal);
