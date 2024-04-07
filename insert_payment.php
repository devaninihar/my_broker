<?php
    error_reporting(0);
    include "razorpay-php/Api.php";

    $apiKey = 'rzp_test_4ZXlNDC9fKRGjQ';
    $apiSecret = 'mzZ0RWkG1v7ORMXLITtXOJZz';
    $api = new Api($apiKey, $apiSecret);

    // Get the Razorpay payment ID from the POST request
    $paymentId = $_POST['razorpay_payment_id'];

    try {
    // Fetch the payment details from Razorpay
    $payment = $api->payment->fetch($paymentId);

    // Ensure the payment status is captured
    if ($payment->status === 'captured') {
        // Extract necessary payment information
        $transactionId = $payment->id;
        $startDate = date('Y-m-d'); // Today's date as start date
        $expiryDate = date('Y-m-d', strtotime('+1 month')); // Expiry date, 1 month from start date
        $paymentStatus = 'Completed'; // Payment status after successful capture
        $paymentAmount = $payment->amount / 100; // Convert amount from paise to rupees

        // Database connection parameters
        $servername = "localhost";
        $username = "root"; // Replace with your actual database username
        $password = ""; // Replace with your actual database password
        $dbname = "my_broker";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die ("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement with placeholders to prevent SQL injection
        $sql = "INSERT INTO payment (UPI_transaction_id, start_date, expiry_date, payment_status, payment_amount, payment_date) 
                VALUES (?, ?, ?, ?, ?, NOW())";

        // Prepare and bind parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $transactionId, $startDate, $expiryDate, $paymentStatus, $paymentAmount);

        // Execute SQL statement
        if ($stmt->execute()) {
            echo "Payment successful. Payment ID: " . $transactionId;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Payment capture failed. Payment ID: " . $paymentId;
    }
} catch (\Exception $e) {
    echo "Payment failed: " . $e->getMessage();
}
?>