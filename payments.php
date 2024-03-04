<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <link rel="stylesheet" href="css\Styles.css"> <!-- Link to your CSS file for styling -->
</head>
<body>

<header>
    <h1>Payment Confirmation</h1>
</header>

<main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $type = $_POST["type"];
        $amount = $_POST["amount"];
        $name = $_POST["name"];
        $id = $_POST["id"];

        echo "<p>Thank you, $name, for your payment of $$amount via $type. Your payment has been successfully processed.</p>";
    }
    ?>
</main>

<footer>
    <p>&copy; 2024 University Name. All rights reserved.</p>
</footer>

</body>
</html>
