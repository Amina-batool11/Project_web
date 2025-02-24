<?php
include('dbcon.php');
$id = $_GET['id'];

// Fetch the product details from the database
$select = "SELECT * FROM product WHERE id='$id'";
$data = mysqli_query($connection, $select);

// Check if product exists
if (!$data || mysqli_num_rows($data) == 0) {
    die("Product not found.");
}
$row = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catch 22 Product Page</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <div class="image-section"><img src="admin/uploads/<?php echo $row['img']; ?>" alt="Product Image" class="main-image">
      <!-- <div class="thumbnail-section">
        <img src="thumb1.jpg" alt="Thumbnail 1">
        <img src="thumb2.jpg" alt="Thumbnail 2">
        <img src="thumb3.jpg" alt="Thumbnail 3">
      </div> -->
    </div>
    <div class="details-section">
      <h1> <?php echo $row['name']; ?></h1>
      <p class="reviews"> <span class="badge"> <?php echo $row['type']; ?></span></p>
      <div class="formats">
        <p>Format</p>
        <div class="size-selector">
            <p>Select Your Size:</p>
            <div class="size-options">
                <button class="size-btn">7</button>
                <button class="size-btn">8</button>
                <button class="size-btn">9</button>
                <button class="size-btn">10</button>
                <button class="size-btn">11</button>
            </div>
    
            <style>
  /* Size Selector Section */
.size-selector {
    margin-top: 20px;
}

.size-selector p {
    font-size: 1.1rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

.size-options {
    display: flex;
    gap: 10px;
    flex-wrap: wrap; /* Ensures buttons wrap nicely on smaller screens */
}

/* Size Buttons */
.size-btn {
    padding: 10px 15px;
    background-color: #f0f0f0;
    border: 2px solid #e0e0e0;
    border-radius: 5px;
    font-size: 1.2rem;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

.size-btn:hover {
    background-color: #0d47a1;
    color: #fff;
    transform: translateY(-2px); /* Slight lift on hover */
}

/* Active button to indicate selected size */
.size-btn.selected {
    background-color: #1976d2;
    color: #fff;
    border-color: #1976d2;
}

/* Responsiveness for mobile */
@media (max-width: 768px) {
    .size-btn {
        font-size: 1rem; /* Smaller font size on mobile */
    }
}
</style>


<script>
// Get all size buttons
const sizeButtons = document.querySelectorAll('.size-btn');

// Add click event listener to each button
sizeButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove 'selected' class from all buttons
        sizeButtons.forEach(btn => btn.classList.remove('selected'));
        
        // Add 'selected' class to the clicked button
        button.classList.add('selected');
        
        // Optionally, log the selected size
        console.log("Selected size:", button.dataset.size);
    });
});
</script>


      </div>
      <div class="price">
        <p>Price</p>
        <p class="amount">$ <?php echo number_format($row['price']); ?> <span></span></p>
        <!-- <p class="amount">Rs <?php echo $row['price']; ?></</p> -->
      </div>
      <div class="quantity">
        <label for="quantity">Quantity</label>
        <input type="number" id="quantity" value="1">
      </div>
    
      <!-- <button class="add-to-cart">Add to cart</button> -->
      
      <a href="add_to_cart.php?id=<?php echo $row['id']; ?>" 
               class="add-to-cart-button"
               onclick="return confirm('Are you sure you want to add this product to your cart?');">
               <button class="add-to-cart"></i> Add to Cart </button>
            </a>
    </div>
  </div>
</body>
</html>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f9f9f9;
}

.container {
  display: flex;
  max-width: 1200px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.image-section {
  flex: 1;
  padding: 20px;
  text-align: center;
}

.main-image {
  width: 100%;
  max-width: 300px;
}

.thumbnail-section img {
  width: 50px;
  margin: 5px;
  cursor: pointer;
}

.details-section {
  flex: 1;
  padding: 20px;
}

h1 {
  font-size: 28px;
  margin-bottom: 10px;
}

.reviews {
  font-size: 16px;
  margin-bottom: 20px;
}

.badge {
  color: #f39c12;
  font-weight: bold;
}

.formats p, .price p {
  font-weight: bold;
  margin-bottom: 5px;
}

button {
  padding: 10px 15px;
  margin: 5px 0;
  border: 1px solid #ddd;
  background-color: #fff;
  cursor: pointer;
}

button:hover {
  background-color: #f0f0f0;
}

.amount {
  color: #e74c3c;
  font-size: 24px;
  font-weight: bold;
}

.quantity {
  margin: 20px 0;
}

.quantity input {
  width: 50px;
  padding: 5px;
  margin-left: 10px;
}

.info-list {
  list-style-type: none;
  padding: 0;
  margin: 20px 0;
}

.info-list li {
  margin: 5px 0;
}

.add-to-cart {
  background-color: #27ae60;
  color: #fff;
  border: none;
  padding: 15px 20px;
  font-size: 16px;
  cursor: pointer;
}

.add-to-cart:hover {
  background-color: #2ecc71;
}
</style>