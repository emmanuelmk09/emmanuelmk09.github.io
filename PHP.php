<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $product = htmlspecialchars($_POST['product']);
    $quantity = htmlspecialchars($_POST['quantity']);

    $to = 'your-email@example.com'; // Replace with your email
    $subject = 'New Order from ' . $name;
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nProduct: $product\nQuantity: $quantity";
    $headers = 'From: noreply@p4esignaturefarm.com' . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Order successfully submitted.';
    } else {
        echo 'Failed to send order. Please try again later.';
    }
}
?>