<?php include "inc/header.php"; ?>
<?php include "inc/database.php"; ?>

<link rel="stylesheet" href="css/login.css">
<h1>Login To Order The Amazing Products</h1>
<div class="container">
    <form method="POST">

        <label class="input-feild">
            Username:
            <input type="text" name="username">
        </label>

        <label class="input-feild">
            Password:
            <input type="password" name="password">
        </label>
        <input type="submit" value="Login" name="submit" class="input-feild submitBtn">
    </form>
</div>

<?php
include "inc/footer.php";

if (isset($_POST['submit'])) {
    userLogin($db, $_POST['username'], $_POST['password']);
}
