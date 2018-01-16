<?php
require_once('stripe-php/init.php');
\Stripe\Stripe::setApiKey("sk_test_tVLQp47CL4mfU4ErnEQc1Tos");

$token = $_POST['stripeSource'];

/*$customer = \Stripe\Customer::create(array(
  "email" => "roaim",
  "source" => $token,
));*/

print_r("sourceId: ".$token."<br>");

/*$charge = \Stripe\Charge::create(array(
  "amount" => 9000,
  "currency" => "usd",
  "customer" => $customer,
  "source" => $token,
));*/

//print_r("chargeId: ".$charge['id']);


// $customer = \Stripe\Customer::retrieve(cus_C6WUSOxE8ZpPfw);
// echo "<pre>"; print_r($customer);
?>