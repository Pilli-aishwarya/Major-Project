<?php
// payment-process.php

// Get payment information from client-side script
$cardNumber = $_POST['cardNumber'];
$expirationDate = $_POST['expirationDate'];
$cvv = $_POST['cvv'];
$amount = $_POST['amount'];

// Process payment using payment gateway API
// ...

// Return response to client-side script
$response = array(
    'success' => true,
    'message' => 'Payment successful!'
);

echo json_encode($response);
?>