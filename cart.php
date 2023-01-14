<?php
include "inc/header.php";
include "inc/database.php";
$userCartTable = $_SESSION['username'] . "_cart";
$result = getCartItems($db, $userCartTable);
$total = 0.0;
?>

<link rel="stylesheet" href="css/cart.css">
<div class="container">
    <?php foreach ($result as $result) : ?>
    <div class="card">
        <img src="<?php echo $result['path']; ?>" alt="unable to load image">
        <div class="cost">
            <?php
                echo "£" . $result['cost'];
                $total = $total + $result['cost'];
                ?>
        </div>
        <form method="POST">
            <input type="submit" value="delete" class="delete_btn">
        </form>
    </div>
    <?php endforeach; ?>

    <div class='total'>
        <div>
            Total: £
            <?php echo $total; ?>
        </div>
        <form>
            <input type="submit" value="Pay" class="pay_btn">
        </form>
    </div>
</div>

<?php include "inc/footer.php"; ?>
