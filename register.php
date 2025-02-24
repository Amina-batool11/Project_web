<?php
include('include/sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="form-container">
        <form method="post" action="" enctype="multipart/form-data">

            <h2>Product Details</h2>

            <div class="input-group">
                <label for="myname">Product Name:</label>
                <input type="text" name="myname" id="myname" required>
            </div>

            <div class="input-group">
                <label for="mytype">Product Type:</label>
                <input type="text" name="mytype" id="mytype" required>
            </div>

            <div class="input-group">
                <label for="myprice">Product Price:</label>
                <input type="number" name="myprice" id="myprice" required>
            </div>

            <div class="input-group">
                <label for="myquantity">Product Quantity:</label>
                <input type="number" name="myquantity" id="myquantity" required>
            </div>

            <div class="input-group">
                <label for="mydescription">Product Description:</label>
                <input type="text" name="mydescription" id="mydescription" required>
            </div>

            <div class="input-group">
                <label for="myimage">Product Image:</label>
                <input type="file" name="myimage" id="myimage" accept="image/*" required>
            </div>

            <div class="form-actions">
                <input type="submit" name="save_btn" value="Save" class="btn-save">
                <a href="view.php" class="btn-view">View</a>
            </div>

        </form>
    </div>

</body>
</html>

<!-- 
<style>
/* General Body Styling */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Form Container */
.form-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
    text-align: center;
}

/* Heading Styling */
h2 {
    font-size: 1.8rem;
    margin-bottom: 20px;
    color: #333;
}

/* Input Group Styling */
.input-group {
    margin-bottom: 20px;
    text-align: left;
}

.input-group label {
    font-size: 1rem;
    color: #555;
    display: block;
    margin-bottom: 5px;
}

.input-group input[type="text"],
.input-group input[type="number"],
.input-group input[type="file"] {
    width: 100%;
    padding: 12px;
    font-size: 1rem;
    border: 1px solid #ddd;
    border-radius: 8px;
    outline: none;
    transition: border-color 0.3s ease;
}

.input-group input[type="text"]:focus,
.input-group input[type="number"]:focus,
.input-group input[type="file"]:focus {
    border-color: #007BFF;
}

/* Button Styling */
.form-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.btn-save {
    padding: 12px 25px;
    background-color: #28a745;
    color: #fff;
    font-size: 1rem;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-save:hover {
    background-color: #218838;
}

.btn-view {
    padding: 12px 25px;
    background-color: #007BFF;
    color: #fff;
    font-size: 1rem;
    border: none;
    border-radius: 8px;
    text-decoration: none;
    display: inline-block;
    transition: background-color 0.3s ease;
}

.btn-view:hover {
    background-color: #0056b3;
}

/* Mobile Responsiveness */
@media (max-width: 600px) {
    .form-container {
        padding: 20px;
        width: 90%;
    }

    .input-group input[type="text"],
    .input-group input[type="number"],
    .input-group input[type="file"] {
        padding: 10px;
    }

    .form-actions {
        flex-direction: column;
        gap: 10px;
    }

    .btn-save,
    .btn-view {
        width: 100%;
        padding: 15px;
    }
}
</style> -->


<?php
if (isset($_POST['save_btn'])) {
    $p_name = $_POST['myname'];
    $p_type = $_POST['mytype'];
    $p_price = $_POST['myprice'];
    $p_quantity = $_POST['myquantity'];
    $p_description = $_POST['mydescription'];
    $image_name = $_FILES['myimage']['name'];
    $image_temp = $_FILES['myimage']['tmp_name'];

    // Directory where images will be uploaded
    $upload_dir = "uploads/";

    // Connect to database
    $connection = mysqli_connect("localhost", "root", "", "project");

    // Move uploaded file directly to the directory
    if (move_uploaded_file($image_temp, $upload_dir . $image_name)) {
        $qry = "INSERT INTO product (name, type, price, quantity,description, img) 
                VALUES ('$p_name', '$p_type', '$p_price', '$p_quantity','$p_description', '$image_name')";
        $check = mysqli_query($connection, $qry);
        

        if ($check) {
            echo "<script type='text/javascript'>alert('Data Saved Successfully');</script>";
        } else {
            echo "<script type='text/javascript'>alert('Something went wrong');</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Failed to upload image');</script>";
    }
}

?> 