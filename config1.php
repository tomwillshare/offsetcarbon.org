<?php
require_once('stripe/stripe-php-3.6.0/init.php');
$stripe = array(
  secret_key      => 'sk_test_udWiYFWIN5LCqiSiU8P6dT74',
  publishable_key => 'pk_test_yv839ToMOs4LXpsnIhu9hQFH'
);
\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>

