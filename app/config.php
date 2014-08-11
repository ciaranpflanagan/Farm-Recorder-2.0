<?php
require_once('./lib/Stripe.php');

$stripe = array(
  "secret_key"      => "sk_test_LpgVLOYm7oBrlCbRLhelshnR",
  "publishable_key" => "pk_test_NetB6GOCLUPGuQ2Q2lNpKbve"
);

Stripe::setApiKey($stripe['secret_key']);
?>