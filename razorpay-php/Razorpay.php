<?php

class RazorpayAPI {

    private $api;

    public function __construct($apiKey, $apiSecret) {
        $this->api = new \Razorpay\Api\Api($apiKey, $apiSecret);
    }

    public function capturePayment($paymentId, $amount) {
        try {
            // Capture the payment
            $response = $this->api->payment->fetch($paymentId)->capture(array('amount' => $amount));

            return [
                'success' => true,
                'payment_id' => $response->id
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'error_message' => $e->getMessage()
            ];
        }
    }

}

?>