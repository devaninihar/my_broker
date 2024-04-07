<?php

namespace Razorpay\Api;

require 'Razorpay.php';

class Api {

    private $keyId;
    private $keySecret;

    public function __construct($keyId, $keySecret) {
        $this->keyId = $keyId;
        $this->keySecret = $keySecret;
    }

    public function order() {
        return new \Razorpay\Api\Api($this->keyId, $this->keySecret);
    }

}
?>
