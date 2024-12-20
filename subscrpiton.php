<?php
use Razorpay\Api\Api;

?>
<html>

<head>
    <style>
        .card {
            overflow: hidden;
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            padding: 1rem;
            width: 14rem;
            height: auto;
            background-color: rgb(122, 48, 143);
            background-image: radial-gradient(circle at 0% 0%,
                    rgb(37, 7, 44) 15%,
                    rgba(0, 0, 0, 0) 75%),
                radial-gradient(circle at 100% 100%,
                    rgb(25, 2, 31, 0.9) 15%,
                    rgba(0, 0, 0, 0) 150%),
                linear-gradient(135deg,
                    rgba(24, 8, 28, 0) 0%,
                    rgb(122, 48, 143) 50%,
                    rgba(24, 8, 28, 0) 100%);
            border-radius: 0.5rem;
        }

        .card::before {
            content: "";
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 2rem;
            height: 2rem;
            background-color: rgb(122, 48, 143);
            background-image: linear-gradient(0deg,
                    rgba(118, 42, 180, 1) 0%,
                    rgb(199, 95, 228) 75%);
            border-radius: 9999px;
            box-shadow: 0 1px 5px 3px rgb(199, 95, 228), 0 0 30px 5px rgb(199, 95, 228);
        }

        .card .title {
            font-size: 1rem;
            color: white;
            font-weight: 600;
        }

        .card .pricing {
            font-size: 1.5rem;
            color: white;
            font-weight: 600;
        }

        .card .pricing .pricing-time,
        .card .sub-title {
            font-size: 0.75rem;
            color: rgb(184, 132, 199);
            font-weight: 500;
        }

        .card .list {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
            font-size: 0.75rem;
            color: white;
            font-weight: 500;
            list-style: none;
        }

        .card .list .list-item .check {
            margin-right: 0.25rem;
            font-size: 1rem;
            color: rgb(199, 95, 228);
            font-weight: 900;
        }

        .card .button {
            overflow: hidden;
            cursor: pointer;
            position: relative;
            margin-top: 0.5rem;
            padding: 0.5rem 0.75rem;
            width: 100%;
            height: fit-content;
            background-color: rgb(122, 48, 143);
            font-size: 0.75rem;
            color: white;
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0px 0px 2px 1px rgb(122, 48, 143);
            transition: all 0.3s cubic-bezier(1, 0, 0, 1);
        }

        .card .button .text-button {
            position: relative;
            z-index: 10;
        }

        .card .button::before,
        .card .button::after {
            content: "";
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            transition: all 0.3s ease-in-out;
        }

        .card .button::before {
            left: 0;
            background-image: radial-gradient(circle at 0% 45%,
                    rgba(16, 5, 36, 1) 19%,
                    rgba(16, 5, 36, 0.26) 46%,
                    rgba(16, 5, 36, 0) 100%);
        }

        .card .button::after {
            right: 0;
            background-image: radial-gradient(circle at 100% 45%,
                    rgba(16, 5, 36, 1) 19%,
                    rgba(16, 5, 36, 0.26) 46%,
                    rgba(16, 5, 36, 0) 100%);
        }

        .card .button:hover {
            box-shadow: 0px 0px 20px 0 rgb(122, 48, 143);
        }

        .card .button:hover::before,
        .card .button:hover::after {
            width: 0;
            opacity: 0;
        }
    </style>
</head>

<body>
    <div class="card" onclick="subscribe()">
        <span class="title">My Broker plus
            <p class="pricing" id="amount" name="amount">299 <span class="pricing-time">/ month</span></p>
            <span class="sub-title">Everything on Basic plus:
                <ul class="list">
                    <li class="list-item"><span class="check">✓</span> Property Location</li>
                    <li class="list-item"><span class="check">✓</span> Seller's Contact No.</li>
                    <li class="list-item"><span class="check">✓</span> Chat With Owner</li>
                    <li class="list-item"><span class="check">✓</span> Bidding</li>
                    <li class="list-item" id="expiry-date"></li>
                </ul>
                <form id="paymentForm">
                    <button type="submit" class="button">
                        <span class="text-button" name="pay" id="pay-button">Get pro now</span>
                    </button>
                </form>
            </span>
        </span>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        function subscribe() {
            var currentDate = new Date();
            var expiryDate = new Date(currentDate);
            expiryDate.setMonth(expiryDate.getMonth() + 1);

            var startDateFormatted = currentDate.toISOString().split('T')[0];
            var expiryDateFormatted = expiryDate.toISOString().split('T')[0];

            document.getElementById("expiry-date").innerHTML = '<span class="check">✓</span> Subscription start date: ' + startDateFormatted + '<br><span class="check">✓</span> Subscription expiry date: ' + expiryDateFormatted;
        }

        $(document).ready(function () {
            $('#paymentForm').submit(function (event) {
                event.preventDefault();
                var amount = $('#amount').text().trim();

                var options = {
                    "key": "rzp_test_4ZXlNDC9fKRGjQ", // Replace with your Razorpay API key
                    amount: parseFloat(amount) * 100,
                    "currency": "INR",
                    "name": "My Broker",
                    "description": "Payment for My Broker Subscription",
                    "handler": function (response) {
                        var paymentId = response.razorpay_payment_id;
                        $.ajax({
                            type: "POST",
                            url: "subscription.php", // Change this to your PHP file handling database insertion
                            data: { razorpay_payment_id: paymentId },
                            dataType: "json",
                            success: function (result) {
                                if (result.success) {
                                    alert("Payment was successful.");
                                } else {
                                    alert("Payment failed: " + result.message);
                                }
                            },
                            error: function (error) {
                                console.error("AJAX request error: " + JSON.stringify(error));
                            }
                        });
                    }
                };

                var rzp = new Razorpay(options);
                rzp.open();
            });
        });
    </script>

</html>