<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #f4f4f9;
            overflow: hidden;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: #ffffff;
            position: fixed; /* Fix the sidebar in place */
            height: 100%; /* Full height */
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .sidebar h2 {
            font-size: 20px;
            margin-bottom: 20px;
            text-align: center;
            color: #ffffff;
        }

        .sidebar a {
            text-decoration: none;
            color: #ffffff;
            padding: 10px 15px;
            margin: 5px 0;
            border-radius: 5px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .main-content {
            margin-left: 250px; /* Offset by sidebar width */
            flex-grow: 1;
            padding: 20px;
            height: 100vh; /* Full viewport height */
            overflow-y: auto; /* Scroll only the content */
        }

        .main-content h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #333333;
        }

        .form-container {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
            margin: auto;
        }

        input[type="text"], input[type="number"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        input[type="submit"] {
            background-color:rgb(162, 0, 255);
            color: #ffffff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color:rgb(149, 0, 179);
        }

        button {
            background-color: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
        }

        button a {
            text-decoration: none;
            color: #ffffff;
        }

        button:hover {
            background-color: #218838;
        }

        img {
            max-width: 100px;
            height: 400px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <!-- <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="register.php">Add Product</a>
        <a href="add.php">View Product</a>
        <a href="#">Logout</a>
    </div> -->

    <!-- Main Content -->
    <div class="main-content">
        <h1>Update Product</h1>
        <div class="form-container">
            <?php
            include('add.php');
            $id = $_GET['id'];

            // Fetch the product details from the database
            $select = "SELECT * FROM product WHERE id='$id'";
            $data = mysqli_query($connection, $select);
            $row = mysqli_fetch_array($data);
            ?>

            <form action="" method="POST" enctype="multipart/form-data">
                <input value="<?php echo $row['name']; ?>" type="text" name="myname" placeholder="Enter Name">
                <input value="<?php echo $row['type']; ?>" type="text" name="mytype" placeholder="Enter Type">
                <input value="<?php echo $row['price']; ?>" type="number" name="myprice" placeholder="Enter Price">
                <input value="<?php echo $row['quantity']; ?>" type="text" name="myquantity" placeholder="Enter Quantity">
                <input value="<?php echo $row['description']; ?>" type="text" name="mydescription" placeholder="Enter Description">
                
                <label>Current Image:</label>
                <img src="uploads/<?php echo $row['img']; ?>" alt="Product Image">
                
                <label>Upload New Image:</label>
                <input type="file" name="myimage">
                
                <input type="submit" name="update_btn" value="Update">
                <button><a href="register.php">Back</a></button>
            </form>
        </div>

        <?php
if (isset($_POST['update_btn'])) {
    // Escape input values to handle apostrophes and special characters
    $p_name = mysqli_real_escape_string($connection, $_POST['myname']);
    $p_type = mysqli_real_escape_string($connection, $_POST['mytype']);
    $p_price = mysqli_real_escape_string($connection, $_POST['myprice']);
    $p_quantity = mysqli_real_escape_string($connection, $_POST['myquantity']);
    $p_description = mysqli_real_escape_string($connection, $_POST['mydescription']);
    $new_image_name = $_FILES['myimage']['name'];
    $new_image_temp = $_FILES['myimage']['tmp_name'];

    $upload_dir = "uploads/";

    // Update query based on whether a new image is uploaded
    if (!empty($new_image_name)) {
        // Escape image file name for safety
        $new_image_name = mysqli_real_escape_string($connection, $new_image_name);

        if (move_uploaded_file($new_image_temp, $upload_dir . $new_image_name)) {
            $query = "UPDATE product
                      SET name = '$p_name', type = '$p_type', price = '$p_price', quantity = '$p_quantity', description = '$p_description' , img = '$new_image_name' 
                      WHERE id = '$id'";
        } else {
            echo "<script>alert('Failed to upload new image');</script>";
            exit;
        }
    } else {
        $query = "UPDATE product
                  SET name = '$p_name', type = '$p_type', price = '$p_price', quantity = '$p_quantity' , description = '$p_description'
                  WHERE id = '$id'";
    }

    $dat = mysqli_query($connection, $query);

    if ($dat) {
        echo "<script>
            alert('Data Updated Successfully');
            window.open('http://localhost/project/admin/view.php', '_self');
        </script>";
    } else {
        // Display MySQL error for debugging
        echo "<script>alert('Something went wrong: " . mysqli_error($connection) . "');</script>";
    }
}
?>