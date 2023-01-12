<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- css style sheet link -->
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />

    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <title>Welcome to Amplitude</title>
</head>

<body>
    <!-- nav bar  -->
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="index.php" class="logo">Amplitude</a>
            </div>
            <a href="#" class="toggle-button">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>

            <div class="nav-bar-items">
                <ul>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="sales.php">Sales</a></li>
                    <li><a href="about.php">About</a></li>

                    <?php if (isset($_SESSION['username'])) : ?>
                    <li><a href="cart.php">Cart</a></li>
                    <?php endif; ?>

                    <?php if (!isset($_SESSION['username'])) : ?>
                    <li><a href="signup.php">Sign Up</a></li>
                    <li><a href="login.php">Login</a></li>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['username'])) : ?>
                    <li><a href="logoff.php">logoff</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </header>
    <!-- end of nav bar -->
