<?php 
include'add.php'; 

include('include/sidebar.php');
?> 
<div class="main-content">
    <h1>View Products</h1>
    <div class="table-container">
<!-- <a href="register.php">Home</a> -->
<table >

    <tr>
        <th> Name</th>
        <th> Type</th>
        <th> Price</th>
        <th> Quantity</th>
        <th> Description</th>
        <th> Product Image</th>
        <th colspan="2"> Actions</th>
</tr>

<?php
$query="SELECT *FROM product";
$data=mysqli_query($connection,$query);
$result=mysqli_num_rows($data);
if($result)
{
    while($rows=mysqli_fetch_array($data))
    {
        ?>
        <tr>
            <td> <?php echo $rows['name'] ?> </td>
            
            <td> <?php echo $rows['type'] ?> </td>
            
            <td> <?php echo $rows['price'] ?> </td>
            
            <td> <?php echo $rows['quantity'] ?> </td>
             
            <td> <?php echo $rows['description'] ?> </td>  
            <td>
                        <img src="uploads/<?php echo $rows['img']; ?>" alt="Product Image" width="100" height="100">
                    </td>
                    <td class="actions">
            
                        <a href="update.php?id=<?php echo $rows['id']; ?>" class="edit">Edit</a>
                    </td>
                    <td class="actions">
                        <a onclick="return confirm('Are you sure you want to delete this data?')"
                         href="delete.php?id=<?php echo $rows['id']; ?>" class="delete">Delete</a>
                    </td>    
     <?php
    }
}
?>
</table>



<!-- <style>
    /* General Body Styling */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

/* Home link styling */
.home-link {
    text-decoration: none;
    color: #007BFF;
    font-size: 1rem;
    padding: 10px;
    border-radius: 5px;
    display: inline-block;
    background-color: #f1f1f1;
    margin-bottom: 20px;
    transition: background-color 0.3s;
}

.home-link:hover {
    background-color: #e0e0e0;
}

/* Table Styling */
.product-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

.product-table th, .product-table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.product-table th {
    background-color: #007BFF;
    color: white;
    font-weight: bold;
}

.product-table tbody tr:hover {
    background-color: #f1f1f1; /* Hover effect for rows */
}

.product-img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
}

/* Actions (Edit & Delete) Button Styling */
.actions a {
    text-decoration: none;
    padding: 8px 15px;
    border-radius: 5px;
    font-weight: bold;
    display: inline-block;
    transition: background-color 0.3s;
}

.edit {
    background-color: #28a745;
    color: white;
}

.edit:hover {
    background-color: #218838;
}

.delete {
    background-color: #dc3545;
    color: white;
}

.delete:hover {
    background-color: #c82333;
}

/* Responsive Design */
@media (max-width: 768px) {
    .product-table th, .product-table td {
        font-size: 0.9rem;
        padding: 8px;
    }

    .product-img {
        width: 80px;
        height: 80px;
    }

    .actions a {
        font-size: 0.9rem;
        padding: 6px 12px;
    }
}
</style> -->
