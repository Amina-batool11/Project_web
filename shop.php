<?php
include('header.php');
include('dbcon.php');

// Initialize base query
$query = "SELECT * FROM product WHERE 1=1";

// Handle search and sorting
$search = $_GET['search'] ?? '';
$sort = $_GET['sort'] ?? '';

// Apply search filter
if ($search) {
    $query .= " AND (name LIKE '%$search%' OR type LIKE '%$search%')";
}

// Apply sorting
if ($sort == 'price_asc') {
    $query .= " ORDER BY price ASC";
} elseif ($sort == 'price_desc') {
    $query .= " ORDER BY price DESC";
}

$result = mysqli_query($connection, $query);
?>

<!-- Single Page Header start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Banner</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="image-container">
        <img src="img/aaa.jpg" alt="Shop Banner" class="banner-image">
        <div class="centered-text">Shop</div>
    </div>
</body>
</html>

<style>
/* Image container */
.image-container {
    position: relative;
    text-align: center;
    width: 100%;
}

/* Image styling */
.banner-image {
    width: 100%; /* Full width */
    height: 350px; /* Thodi kam height */
    object-fit: cover; /* Ensure cropping looks good */
}

/* Centered text styling */
.centered-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 36px;
    font-weight: bold;
    color: white;
    background: rgba(0, 0, 0, 0.5);
    padding: 10px 20px;
    border-radius: 5px;
}
</style>

<!-- <div class=" page-header py-5">
    <h1 class="text-center text-white display-6">Shop</h1>
    <ol class="breadcrumb justify-content-center mb-0">
      
      
    </ol>
</div> -->
<!-- Single Page Header End -->

<!-- Fruits Shop Start -->
<div class="container-fluid fruite py-5">
    <div class="container py-5">
        <h1 class="mb-4">Shoe Shop</h1>
        <form action="" method="GET">
            <div class="row g-4 align-items-center mb-4">
                <!-- Search Bar -->
                <div class="col-md-6 col-lg-4">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control p-3" placeholder="Search products..."
                            value="<?php echo htmlspecialchars($search); ?>">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <!-- Sorting Dropdown -->
                <div class="col-md-6 col-lg-4">
                    <select name="sort" class="form-select p-3">
                        <option value="">Default Sorting</option>
                        <option value="price_asc" <?php echo ($sort == 'price_asc') ? 'selected' : ''; ?>>Price: Low to
                            High</option>
                        <option value="price_desc" <?php echo ($sort == 'price_desc') ? 'selected' : ''; ?>>Price: High
                            to Low</option>
                    </select>
                </div>
                <div class="col-md-6 col-lg-4">
                    <button type="submit" class="btn btn-success w-100">Apply Filters</button>
                </div>
            </div>
        </form>

        <div class="row g-4">
            <?php while ($product = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-6 col-lg-4">
                <div class="rounded position-relative fruite-item" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="fruite-img">
                        <img src="admin/uploads/<?php echo $product['img']; ?>" class="img-fluid w-100 rounded-top"
                            style="height: 200px; object-fit: cover;" alt="<?php echo $product['name']; ?>">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                        style="top: 10px; left: 10px;">
                        <?php echo $product['type']; ?>
                    </div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                        <h4><?php echo $product['name']; ?></h4>
                        <p><?php echo $product['description']; ?></p>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">$<?php echo $product['price']; ?> / kg</p>
                            <a onclick="return confirm('Are you sure you want to add this product to your cart?');"
                                href="add_to_cart.php?id=<?php echo $product['id']; ?>"
                                class="btn btn-primary text-white px-5">
                                <i class="fa fa-shopping-bag me-2"></i>Add to Cart
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Fruits Shop End -->

<?php
include('footer.php');
?>