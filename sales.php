<?php
include "inc/header.php";
include "inc/database.php";
$result = getSalesSterioItems($db);
?>

<link rel="stylesheet" href="css/sales.css">

<div class="container">
    <?php foreach ($result as $result) : ?>
        <div class="item-container">
            <form action="post">
                <img src="<?php echo $result['path']; ?>" alt="unable to load image" class="item-img">
                <div class="info">
                    <br>
                    £
                    <?php echo $result['cost']; ?>
                    /
                    <input type="submit" value="Add" class="btn">
                </div>
            </form>
        </div>
    <?php endforeach; ?>
</div>

<?php include "inc/footer.php"; ?>
