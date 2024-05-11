<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razorpay Payment Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Make a Payment</h1>
        <form action="process_payment.php" method="post">
            <!-- Add input fields for card details (card number, name, expiry, CVV) -->
            <!--<input type="text" name="card_number" placeholder="Card Number" required>-->
            <img src="img/qr1.jpg" alt="QR code">
            <!-- Other input fields... -->

            <!-- Add Razorpay payment button -->
            <script
                src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="YOUR_RAZORPAY_KEY"
                data-amount="10000" <!-- Amount in paise (e.g., 10000 for ₹100) -->
                data-currency="INR"
                data-name="Your Company Name"
                data-description="Payment for Booking"
                data-image="logo.png" <!-- Your company logo -->
                data-prefill.name="John Doe"
                data-prefill.email="john@example.com"
            ></script>

            <button type="submit">Pay Now</button>
        </form>
    </div>
</body>
</html>
