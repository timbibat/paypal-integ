<?php
require 'config.php';

header('Content-Type: application/json');

$orderId = $_GET['orderID'] ?? null;

if (!$orderId) {
    echo json_encode(['error' => 'No Order ID provided']);
    exit;
}

$token = getAccessToken();

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, PAYPAL_URL . "/v2/checkout/orders/$orderId/capture");
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer $token"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);


echo $response;
?>