<?php
/**
 * Created by IntelliJ IDEA.
 * User: Hridoy
 * Date: 16-Jan-18
 * Time: 2:32 PM
 */
require_once('stripe-php/init.php');
\Stripe\Stripe::setApiKey("sk_test_tVLQp47CL4mfU4ErnEQc1Tos");

//$token = $_POST['stripeSource'];

$customer = \Stripe\Customer::retrieve('cus_C6WUSOxE8ZpPfw');
$customer->sources->create(array("source" => $token));
$customer->save();



//$source = \Stripe\Source::retrieve('src_1BknuKDtkhc9fnba0FD2NdJF');
//$customer->sources->create($source);
//$customer->save();


$customer = \Stripe\Customer::retrieve('cus_C6WUSOxE8ZpPfw');
echo "<pre>"; var_dump($customer);