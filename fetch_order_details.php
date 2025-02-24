<?php
$connection = mysqli_connect("localhost", "root", "", "project");

if (isset($_GET['order_id'])) {
    $order_id = intval($_GET['order_id']);

    // Query to fetch order details (address from `orders` table)
    $order_query = "SELECT o.id, o.date, o.status, o.name, o.phone, o.address 
                    FROM orders o 
                    WHERE o.id = $order_id";
    $order_result = mysqli_query($connection, $order_query);
    $order_data = mysqli_fetch_assoc($order_result);

    if ($order_data) {
        echo '<h5>Order Details</h5>';
        echo '<ul>';
        echo '<li><strong>Order ID:</strong> ' . $order_data['id'] . '</li>';
        echo '<li><strong>Date:</strong> ' . date('Y-m-d H:i:s', strtotime($order_data['date'])) . '</li>';
        echo '<li><strong>Status:</strong> ' . htmlspecialchars($order_data['status']) . '</li>';
        echo '<li><strong>Customer Name:</strong> ' . htmlspecialchars($order_data['name']) . '</li>';
        echo '<li><strong>Phone:</strong> ' . htmlspecialchars($order_data['phone']) . '</li>';
        echo '<li><strong>Delivery Address:</strong> ' . htmlspecialchars($order_data['address']) . '</li>';
        echo '</ul>';
    } else {
        echo '<p>Order not found.</p>';
    }

    // Query to fetch order items
    $items_query = "SELECT oi.product_id, oi.quantity, oi.price, p.name, p.img
                    FROM order_items oi 
                    JOIN product p ON oi.product_id = p.id 
                    WHERE oi.order_id = $order_id";
    $items_result = mysqli_query($connection, $items_query);

    if (mysqli_num_rows($items_result) > 0) {
        echo '<h5>Order Items</h5>';
        echo '<table class="table table-bordered table-striped table-hover table-dark">';
        echo '<thead>';
        echo '<tr><th>Image</th><th>Product Name</th><th>Quantity</th><th>Price</th><th>Total</th></tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($row = mysqli_fetch_assoc($items_result)) {
            $total_price = $row['price'] * $row['quantity'];
            echo '<tr>';
            echo '<td><img src="uploads/' . htmlspecialchars($row['img']) . '" alt="' . htmlspecialchars($row['name']) . '" style="width: 80px; height: 80px;"></td>';
            echo '<td>' . htmlspecialchars($row['name']) . '</td>';
            echo '<td>' . $row['quantity'] . '</td>';
            echo '<td>$' . number_format($row['price'], 2) . '</td>';
            echo '<td>$' . number_format($total_price, 2) . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>No items found for this order.</p>';
    }
} else {
    echo '<p>Invalid request.</p>';
}
?>