<?php include "inc/header.php"; ?>
<?php include "inc/database.php"; ?>

<link rel="stylesheet" href="css/login.css">

<h1>Why Not Sign Up for more features</h1>

<div class="container">

    <form method="POST">
        <label class="input-feild">
            New Username:
            <input type="text" name="username">
        </label>

        <label class="input-feild">
            New Password:
            <input type="password" name="password">
        </label>
        <input type="submit" value="Sign Up" name="submit" class="input-feild submitBtn">
    </form>
</div>

<?php
include "inc/footer.php";

if (isset($_POST['submit'])) {
    signUpNewUser($db, $_POST['username'], $_POST['password']);
}
