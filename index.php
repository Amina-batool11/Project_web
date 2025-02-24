<?php include'header.php' ?>

<!-- Hero Start -->
<!-- Hero Start -->
<div class="container-fluid py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-md-12 col-lg-7">
                <h4 class="mb-3 text-secondary">The Luxury Shoe</h4>
                <h1 class="mb-5 display-3 text-primary">Amina's ShoeHub</h1>
                <p class="fs-4 text-muted mb-4">Explore the latest trends in luxury footwear, comfort, and style all in one place.</p>
                <!-- Call to Action Button -->
                <a href="#shop-now" class="btn btn-primary px-4 py-3 rounded-pill shadow-lg">Shop Now</a>
            </div>
            <div class="col-md-12 col-lg-5">
                <!-- Image Carousel with Auto Slide -->
                <div id="carouselId" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active rounded">
                            <img src="img/img11.jpg" class="img-fluid w-100 h-100 bg-secondary rounded" alt="Stylish Shoe">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white">Stylish Shoe</h5>
                            </div>
                        </div>
                        <div class="carousel-item rounded">
                            <img src="img/item-15.jpg" class="img-fluid w-100 h-100 rounded" alt="Luxury Shoe">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white">Luxury Collection</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


<style>
  /* Hero Section Styling */
.hero-header {
    background: linear-gradient(135deg, #FFB6C1, #FF8C00, #98C6FF); /* Soft pastel gradient */
    color: #fff;
    border-radius: 20px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Soft shadow around hero section */
    position: relative;
    overflow: hidden;
    background-image: url('img/dep.jpg'); /* Replace with your desired image */
    background-size: cover; /* Ensures the image covers the entire hero section */
    background-position: center; /* Center the background image */
    background-attachment: fixed; /* Keeps the background fixed while scrolling */
}

/* Heading and Paragraph Styling */
.hero-header h1 {
    font-size: 3.5rem;
    font-weight: bold;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.4); /* Strong shadow for the heading */
}

.hero-header p {
    font-size: 1.2rem;
    font-weight: 500;
    color: rgba(255, 255, 255, 0.8); /* Subtle white text */
}

/* Button Styling */
.hero-header .btn-primary {
    background-color:rgb(177, 235, 245); /* Vibrant button color */
    border: none;
    font-size: 1.1rem;
    font-weight: 600;
    text-transform: uppercase;
    transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth hover transition */
}

.hero-header .btn-primary:hover {
    background-color: #ff6347; /* Lighter shade of button color on hover */
    transform: translateY(-5px); /* Button lift effect */
}

/* Carousel Styling */
.carousel-item {
    position: relative;
    border-radius: 15px;
}

.carousel-item img {
    object-fit: cover; /* Ensures the image fits and covers the area */
    filter: none; /* No blur on carousel images */
    transition: filter 0.5s ease-out;
}

.carousel-item .carousel-caption h5 {
    font-size: 2rem;
    font-weight: bold;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3); /* Text shadow for better readability */
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #fff; /* Change carousel arrows to white */
    border-radius: 50%;
    padding: 10px;
}

/* Carousel Controls Styling */
.carousel-control-prev, .carousel-control-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
}

.carousel-control-prev {
    left: 5%;
}

.carousel-control-next {
    right: 5%;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-header h1 {
        font-size: 2.5rem;
    }

    .hero-header .btn-primary {
        font-size: 1rem;
    }

    .carousel-caption h5 {
        font-size: 1.5rem;
    }

    .carousel-item img {
        height: 250px;
    }
}

/* Hero Section Styling */
.hero-header {
    position: relative;
    background-color: #f0f0f0; /* Optional: to add a fallback color */
    height: 100vh; /* Full height of the hero section */
    color: #fff;
    overflow: hidden; /* Hide any overflow */
}

/* Add the blurred background image */
.hero-header::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('img/abs.jpg'); /* Replace with your image path */
    background-size: cover; /* Make the image cover the entire section */
    background-position: center; /* Center the image */
    filter: blur(10px); /* Apply blur effect */
    z-index: -1; /* Ensure the background stays behind the content */
}

}


</style>
<!-- Hero End -->




    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-4 text-start">
                        <h1>Products</h1>
                    </div>
                    <div class="col-lg-8 text-end">
                        <!-- <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill"
                                    href="#tab-1">
                                    <span class="text-dark" style="width: 130px;">All Products</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 130px;">Vegetables</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 130px;">Fruits</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                    <span class="text-dark" style="width: 130px;">Bread</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                    <span class="text-dark" style="width: 130px;">Meat</span>
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </div>

                <div class="container">
                <div class="row">
                    <?php
        $connection = mysqli_connect("localhost", "root", "", "project");

        // Fetch all products
        $query = "SELECT * FROM product";
        $data = mysqli_query($connection, $query);
        $products = [];
        while ($row = mysqli_fetch_array($data)) {
            $products[] = $row;
        }
        ?>
                    <div id="product-container" class="product-grid">
                        <?php
            // Display the first 12 products
            foreach ($products as $index => $product) {
                if ($index >= 12) break;
            ?>
                        <div class="product-item">
                            <div class="fruite-img">
                                <img src="admin/uploads/<?php echo $product['img']; ?>"
                                    class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="p-4 rounded-bottom">
                                <div class="product-name"><?php echo $product['name']; ?></div>
                                <div class="product-description"><?php echo $product['type']; ?></div>
                                <div class="product-price">$<?php echo $product['price']; ?></div>
                                <a href="single.php?id=<?php echo $product['id']; ?>" class="btn btn-success px-5 mt-4 text-white add-to-cart">View Product</a>
                                <!-- <a href="add_to_cart.php?id=<?php echo $product['id']; ?>"
                                    class="btn btn-primary text-white my-3 py-2 w-100"
                                    onclick="return confirm('Are you sure you want to add this product to your cart?');">
                                    Add to Cart
                                </a> -->
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="text-center my-4">
                         <a href="shop.php " id="view-more" class="btn btn-danger w-50 py-2 mt-3">View More...</a>
                    </div>
                </div>
            </div>

            <!-- Add CSS for Grid Layout -->
             <style>
  /* General Container */
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); /* Adapt grid layout */
    gap: 25px; /* Slightly larger gap between items */
    padding: 30px; /* More space around the grid */
    justify-content: center; /* Center the grid */
}

/* Individual Product Item */
.product-item {
    background-color:rgb(248, 236, 236);
    border-radius: 12px; /* Rounded corners for a modern look */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for effects */
    cursor: pointer;
    position: relative;
    border: 1px solid #e0e0e0; /* Subtle border for structure */
}

/* Hover Effect for Product Item */
.product-item:hover {
    transform: translateY(-8px); /* Lifting effect for engagement */
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2); /* Stronger shadow when hovering */
}

/* Image Styling with hover zoom */
.fruite-img img {
    width: 100%;
    height: 220px; /* Adjusted height for a more balanced image */
    object-fit: cover; /* Image scaling */
    transition: transform 0.3s ease; /* Smooth zoom-in effect */
    border-bottom: 2px solid #f5f5f5; /* Soft separation line under image */
}

.fruite-img img:hover {
    transform: scale(1.1); /* Zoom-in effect for a more dynamic feel */
}

/* Padding inside product items */
.p-4 {
    padding: 20px;
}

/* Product Name - More readable and striking */
.product-name {
    font-size: 1.4rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 0.6rem;
    text-transform: capitalize; /* Capitalize the first letter of each word */
    line-height: 1.5;
    font-family: 'Roboto', sans-serif; /* Cleaner font */
}

/* Product Description - Subtle styling */
.product-description {
    font-size: 1rem;
    color: #888; /* Lighter color for description */
    margin-bottom: 1.5rem; /* More space after description */
    line-height: 1.6;
    font-family: 'Open Sans', sans-serif; /* Slightly different font for contrast */
}

/* Product Price - Bolder and attention-grabbing */
.product-price {
    font-size: 1.5rem;
    font-weight: 700;
    color: #e91e63; /* Vibrant pink for pricing */
    margin-top: 0.8rem;
    font-family: 'Arial', sans-serif; /* Simple font for price */
}

/* Gradient Background for the grid */
.product-grid {
    background: linear-gradient(135deg, #f7f7f7, #ffffff); /* Subtle gradient for the grid */
}

/* Add a Call-to-Action Button */
.product-item .cta-btn {
    display: block;
    width: 100%;
    padding: 10px 20px;
    margin-top: 15px;
    background-color: #0d47a1; /* Strong color for the button */
    color: #fff;
    text-align: center;
    border-radius: 8px;
    text-decoration: none;
    font-size: 1rem;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.3s ease; /* Button effect */
}

.product-item .cta-btn:hover {
    background-color: #1976d2; /* Lighter shade of blue on hover */
    transform: translateY(-2px); /* Slight lift on hover */
}

/* Responsive Design for Mobile Devices */
@media (max-width: 768px) {
    .product-grid {
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); /* More flexible layout on mobile */
        padding: 15px; /* Adjust padding for mobile view */
    }

    .product-name {
        font-size: 1.3rem; /* Slightly smaller product names on mobile */
    }

    .product-price {
        font-size: 1.4rem; /* Slightly smaller prices on mobile */
    }

    .product-description {
        font-size: 0.95rem; /* Adjust description text size */
    }

    .product-item {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); /* Smaller shadow for mobile */
    }

    .p-4 {
        padding: 15px; /* Less padding on smaller screens */
    }
}



</style>

                
    <!-- Fruits Shop End-->


    




  <!-- Banner Section Start-->
<!-- Banner Section Start-->
<div class="container-fluid banner my-5">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="py-4">
                    <!-- Heading: Shoes Related -->
                    <h1 class="display-3 text-white fw-bold mb-3">Step Up Your Style</h1>
                    <p class="fw-normal text-white mb-4 fs-4">Shop the Latest Shoe Trends</p>
                    <p class="text-white mb-4 fs-5">Explore a wide range of stylish shoes for every occasion. Perfect fit and comfort guaranteed!</p>
                    <!-- Shop Now Button -->
                    <a href="#"
                        class="banner-btn btn border-2 border-white rounded-pill text-white py-3 px-5 shadow-sm hover-shadow">SHOP NOW</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <!-- Image: Shoe Image -->
                    <img src="img/img.jpg" class="img-fluid w-100 rounded banner-image" alt="Featured Shoe">
                    <div class="price-info position-absolute">
                        <!-- Price and Size -->
                        <h1 class="text-white mb-0" style="font-size: 50px;">$120</h1>
                        <div class="d-flex flex-column text-white text-center">
                            <span class="h4 mb-0">Size 10</span>
                            <span class="h5">Men's Sneakers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Banner Section End -->
<style>
  /* Banner Section Styling */
.banner {
    background: linear-gradient(135deg, #6e7a8c, #4b5d67); /* Gradient background */
    color: #fff;
    border-radius: 15px;
    position: relative;
    overflow: hidden;
}

/* Heading and Paragraph Styling */
.banner h1 {
    font-size: 3rem;
    font-weight: bold;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Shadow effect for heading */
}

.banner p {
    font-size: 1.1rem;
    color: #f1f1f1;
    font-weight: 500;
}

/* Shop Now Button Styling */
.banner-btn {
    font-size: 1.2rem;
    font-weight: bold;
    border: 2px solid #fff;
    transition: background-color 0.3s ease, transform 0.3s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

.banner-btn:hover {
    background-color: #f1f1f1;
    color: #333;
    transform: translateY(-5px); /* Slight lift effect */
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15); /* Hover shadow */
}

/* Image Styling */
.banner-image {
    border-radius: 15px;
    filter: blur(3px); /* Applying blur effect */
    transition: transform 0.3s ease, filter 0.3s ease; /* Smooth transition for blur and zoom */
}

.banner-image:hover {
    transform: scale(1.05); /* Zoom effect on hover */
    filter: blur(0px); /* Remove blur on hover */
}

/* Featured Price and Size Info Box */
.price-info {
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
    border-radius: 50%; /* Circular shape */
    width: 160px;
    height: 160px;
    top: 20%;
    right: -15%; /* Position it to the side of the image */
    padding: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    transform: translateY(-50%);
}

.price-info h1 {
    font-size: 40px;
    font-weight: bold;
}

.price-info span {
    font-size: 1rem;
    font-weight: 500;
}

/* Responsive Design for Mobile */
@media (max-width: 768px) {
    .banner h1 {
        font-size: 2.5rem;
    }

    .banner-btn {
        font-size: 1rem;
        padding: 10px 20px;
    }

    .banner .price-info {
        width: 130px;
        height: 130px;
        top: 15%;
        right: -10%;
    }

    .banner .price-info h1 {
        font-size: 30px;
    }
}

</style>

<!-- Banner Section End -->



    
    <!-- Fact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="bg-light p-5 rounded">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>satisfied customers</h4>
                            <h1>1963</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>quality of service</h4>
                            <h1>99%</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>quality certificates</h4>
                            <h1>33</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>Available Products</h4>
                            <h1>789</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Start -->


    <!-- Tastimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="testimonial-header text-center">
                <h4 class="text-primary">Our Testimonial</h4>
                <h1 class="display-5 mb-5 text-dark">Our Client Saying!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the
                                industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Client Name</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the
                                industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Client Name</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the
                                industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Client Name</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tastimonial End -->

    <?php include'footer.php' ?>


   