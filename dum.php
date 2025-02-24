<?php
            include('dbcon.php');
            $id = $_GET['id'];

            // Fetch the product details from the database
            $select = "SELECT * FROM product WHERE id='$id'";
            $data = mysqli_query($connection, $select);
            $row = mysqli_fetch_array($data);
            ?>
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        .product-page {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .product-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
            padding: 20px;
        }
        .product-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .product-name {
            font-size: 1.5em;
            margin: 10px 0;
        }
        .product-price {
            font-size: 1.2em;
            color: #27ae60;
            margin-bottom: 20px;
        }
        .buy-button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .buy-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="product-page">
        <div class="product-card">
             <img src="admin/uploads/<?php echo $row['img']; ?>" alt="Product Image" class="product-image">
            <h2 class="product-name"><?php echo $row['name']; ?></h2>
            <p class="product-price"><?php echo $row['price']; ?></p>
            <button class="buy-button">Buy Now</button>
        </div>
    </div>
</body>
</html>