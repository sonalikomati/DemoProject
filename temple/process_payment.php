<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Payment</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
}
.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}
button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Process Payment</h1>
        <form action="process_payment.php" method="post">
            <!-- Add input fields for card details (card number, name, expiry, CVV) -->
            <input type="text" name="card_number" placeholder="Card Number" required>
            <!-- Other input fields... -->

            <!-- Add submit button -->
            <button type="submit">Pay Now</button>
        </form>
    </div>
</body>
</html>
