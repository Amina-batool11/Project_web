<?php
include('dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                Fruitables
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item bg-success px-4 mx-3 rounded">
                        <a class="nav-link text-white" href="registration.php">Registration</a>
                    </li>
                    <li class="nav-item bg-success px-4 rounded">
                        <a class="nav-link text-white" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Registration Form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="registration.php">
                            <div class="mb-3">
                                <label for="name" class="form-label">Username</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Enter your username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Enter your password" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone No</label>
                                <input type="text" id="phone" name="phone" class="form-control"
                                    placeholder="Enter your phone number" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" name="save_btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2025 MyApp. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

    <?php
    if (isset($_POST['save_btn'])) {
        $my_name = $_POST['name'];
        $user_email = $_POST['email'];
        $my_password = $_POST['password'];
        $my_phone = $_POST['phone'];

        session_start();
        $_SESSION['name'] = $user_email;
        $qry = "SELECT * FROM login WHERE email = '" . $_SESSION['name'] . "'";
        $su = mysqli_query($connection, $qry);
        $se = mysqli_num_rows($su);
        if ($se) {
            echo "<script type='text/javascript'>alert('You entered an existing Email');</script>";
        } else {
            $query = "INSERT INTO login (name,email,password,phone) VALUES('$my_name','$user_email','$my_password','$my_phone')";
            $sub = mysqli_query($connection, $query);

            if ($sub) {
                echo "<script type='text/javascript'>alert('Data Registered Successfully');</script>";
                echo "<script type='text/javascript'>window.location.href = 'login.php';</script>";
            } else {
                echo "<script type='text/javascript'>alert('Something went wrong');</script>";
            }
        }
    }
    ?>

</body>
</html>
