<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>
  Stripe.setPublishableKey('{{ env("STRIPE_API_PUBLIC") }}');
  jQuery(function($) {
    $("#card-number").focusout(function() {
      var el = $(this);
      if ( ! Stripe.validateCardNumber(el.val())) {
        el.closest(".form-group").addClass("has-error");
      } else {
        el.closest(".form-group").removeClass("has-error");
      }
    });
    $("#card-cvc").focusout(function() {
      var el = $(this);
      if ( ! Stripe.validateCVC(el.val())) {
        el.closest("div").addClass("has-error");
      } else {
        el.closest("div").removeClass("has-error");
      }
    });
    $('#purchase-form').submit(function(e) {
      $('.submit-button').prop('disabled', true);
      var $form = $(this);
      $form.find('.payment-errors').hide()
      Stripe.card.createToken({
        number: $form.find('#card-number').val(),
        cvc: $form.find('#card-cvc').val(),
        exp_month: $form.find('#card-month').val(),
        exp_year: $form.find('#card-year').val()
      }, stripeResponseHandler);
      return false;
    });
  });
  var stripeResponseHandler = function(status, response) {
    var $form = $('#purchase-form');
    var $errors = $('.payment-errors');
    // Reset any errors
    $errors.text("");
    if (response.error) {
      $errors.text(response.error.message).show();
      $form.find('button').prop('disabled', false);
    } else {
      var token = response.id;
      $form
        .append($('<input type="hidden" name="stripe_token" />')
        .val(token));
      $form.get(0).submit();
      $form.find('button').html('Processing...');
    }
  };
</script>
