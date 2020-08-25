jQuery("#action").prop('disabled', true);
var toValidate = jQuery('#full_name, #date_birth, #email, #phone, #distance, #payment'),
    valid = false;
toValidate.keyup(function () {
    if (jQuery(this).val().length > 0) {
        jQuery(this).data('valid', true);
    } else {
        jQuery(this).data('valid', false);
    }
    toValidate.each(function () {
        if (jQuery(this).data('valid') == true) {
            valid = true;
        } else {
            valid = false;
        }
    });
    if (valid === true) {
        jQuery("#action").prop('disabled', false);
    } else {
        jQuery("#action").prop('disabled', true);
    }
});