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
                    <a href="shop.php">
                        <li>Shop</li>
                    </a>
                    <a href="sales.php">
                        <li>Sales</li>
                    </a>
                    <a href="about.php">
                        <li>About</li>
                    </a>

                    <?php if (isset($_SESSION['username'])) : ?>
                        <a href="cart.php">
                            <li>Cart</li>
                        </a>
                    <?php endif; ?>

                    <?php if (!isset($_SESSION['username'])) : ?>
                        <a href="signup.php">
                            <li>Sign Up</li>
                        </a>
                        <a href="login.php">
                            <li>Login</li>
                        </a>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['username'])) : ?>
                        <a href="logoff.php">
                            <li>logoff</li>
                        </a>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </header>
    <!-- end of nav bar -->
