<?php
// RENAME THIS FILE TO config.php AND ADD YOUR KEYS

define('PAYPAL_CLIENT_ID', 'PASTE_YOUR_SANDBOX_CLIENT_ID_HERE');
define('PAYPAL_SECRET', 'PASTE_YOUR_SANDBOX_SECRET_HERE');
define('PAYPAL_URL', 'https://api-m.sandbox.paypal.com');

function getAccessToken() {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, PAYPAL_URL . "/v1/oauth2/token");
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Accept: application/json"]);
    curl_setopt($ch, CURLOPT_USERPWD, PAYPAL_CLIENT_ID . ":" . PAYPAL_SECRET);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    
    if (curl_errno($ch)) {
        die('cURL Error: ' . curl_error($ch));
    }
    
    curl_close($ch);

    $json = json_decode($response, true);
    
    if (isset($json['error'])) {
        die('PayPal API Error: ' . $json['error_description']);
    }

    return $json['access_token'];
}
?>