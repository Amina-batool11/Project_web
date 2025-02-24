<?php

include('smtp/PHPMailerAutoload.php');
// Include database connection
include 'dbcon.php';
//get total price from url
@$total = $_GET['total'];



// Check if the form is submitted
// Get the user ID and total price from the URL
$user_email = $_SESSION['user_email'];
@$total = $_GET['total'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $phone = $_POST['phone'];

    // Insert order into `orders` table
    $sql = "INSERT INTO orders (user_email, name, email, address, city, state, zip, phone, total_price) 
            VALUES ('$user_email', '$name', '$email', '$address', '$city', '$state', '$zip', '$phone', '$total')";

    if (mysqli_query($connection, $sql)) {
        $order_id = mysqli_insert_id($connection);

        // Get cart items for the user
        $cart_result = mysqli_query($connection, "SELECT * FROM cart WHERE user_email = '$user_email'");
        $order_details = '';

        while ($cart_row = mysqli_fetch_assoc($cart_result)) {
            $product_id = $cart_row['p_id'];
            $quantity = $cart_row['quantity'];

            $product_query = "SELECT * FROM product WHERE id = '$product_id'";
            $product_result = mysqli_query($connection, $product_query);
            $product_row = mysqli_fetch_assoc($product_result);

            // Insert into `order_items`
            $order_item_sql = "INSERT INTO order_items (order_id, product_id, quantity, price) 
                               VALUES ('$order_id', '$product_id', '$quantity', '$total')";
            mysqli_query($connection, $order_item_sql);

            $order_details .= "Product: " . $product_row['name'] . ", Quantity: $quantity, Price: $" . number_format($total, 2) . "<br>";
        }

        // Send confirmation email
        $subject = "Order Confirmation - Order #$order_id";
        $message = "Dear $name,<br><br>
                    Thank you for your order!<br>
                    <strong>Order Summary:</strong><br>
                    $order_details
                    <strong>Total:</strong> $" . number_format($total, 2) . "<br><br>
                    Best regards,<br>FruitWeb Team";

        if (smtp_mailer($email, $subject, $message)) {
            echo "Order placed successfully and confirmation email sent!";
            // clear cart items from cart table 
            mysqli_query($connection, "DELETE FROM cart WHERE user_email = '$user_email'");
            header ("Location: index.php");
        } else {
            echo "Order placed successfully but failed to send confirmation email.";
            // clear cart items from cart table
            mysqli_query($connection, "DELETE FROM cart WHERE user_email = '$user_email'");
            header ("Location: index.php");
        }

        // Clear the cart
        mysqli_query($connection, "DELETE FROM cart WHERE user_email = '$user_email'");
    } else {
        echo "Database error: " . mysqli_error($connection);
    }
}

function smtp_mailer($to, $subject, $msg) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'aminabatool1511@gmail.com'; // Replace with your email
        $mail->Password = 'nawhtwfiqynltscy';       // Replace with your email password or app password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('aminabatool1511@gmail.com', 'FruitWeb');
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $msg;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 50%;
        margin: auto;
        overflow: hidden;
    }

    .main {
        background: #fff;
        padding: 20px;
        margin-top: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .main h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
    }

    .form-group button {
        background: #5cb85c;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    .form-group button:hover {
        background: #4cae4c;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="main">
            <h2>Checkout</h2>
            <!-- heading that show the total order price  -->
            <h3>Total: $<?php echo $total; ?></h3>


            <form method="post" action="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="Phone">Phone#</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" required></textarea>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state" required>
                </div>
                <div class="form-group">
                    <label for="zip">Zip Code</label>
                    <input type="text" id="zip" name="zip" required>
                </div>
                <div class="form-group">
                    <button type="submit">Place Order</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>