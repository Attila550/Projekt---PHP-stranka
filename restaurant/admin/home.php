<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crispy Kitchen</title>

    <link rel="preconnect" href="../https://fonts.googleapis.com">

    <link rel="preconnect" href="../https://fonts.gstatic.com" crossorigin>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/bootstrap-icons.css" rel="stylesheet">

    <link href="../css/tooplate-crispy-kitchen.css" rel="stylesheet">
</head>





<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() == PHP_SESSION_ACTIVE) {
} else {
    session_start();
}

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use restaurant\lib\DB;

$db = new DB("localhost", 3306, "root", "", "projekt");

$dbInstance = new \restaurant\lib\DB();

$restaurantItems = $dbInstance->getItems();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 1) {
        echo "<br><p style='color: green'> Item was added correctly</p><br>";
    } elseif ($_GET['status'] == 2) {
        echo "<br><p style='color: red'> Item was not added correctly</p><br>";
    } elseif ($_GET['status'] == 3) {
        echo "<br><p style='color: green'> Item was removed correctly</p><br>";
    } elseif ($_GET['status'] == 4) {
        echo "<br><p style='color: red'> Item was not removed correcly</p><br>";
    } elseif ($_GET['status'] == 5) {
        echo "<br><p style='color: green'> Item was updated correcly</p><br>";
    } elseif ($_GET['status'] == 8) {
        echo "<br><p style='color: red'> Item was not updated correctly</p><br>";
    }
}
?>



<section class="menu section-padding">
    <div class="container">
        <div class="row">

            <div class="top-icons logout">
                <a href="logout.php" class="">
                <span class="price-tag bg-black shadow-lg ms-4">Logout</span>
                </a>
            </div>

            <div class="col-12 text-center mb-lg-5 mb-4">
                <h2 class="section-title">Admin Interface</h2>
            </div>

            <?php foreach ($restaurantItems as $item) : ?>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="menu-image-wrap">
                        <img src="../<?php echo $item['img'];  ?>" class="img-fluid menu-image" alt="">
                    </div>


                    <div class="menu-info d-flex flex-wrap align-items-center">
                        <h4 class="mb-0"><?php echo $item['title'];  ?></h4>

                        <span class="price-tag bg-white shadow-lg ms-4"><small>$</small><?php echo $item['price'];  ?></span>

                        <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                            <h6 class="reviews-text mb-0 me-3"><?php echo $item['rating'];  ?>/5</h6>

                            <p class="reviews-text mb-0 ms-4"><?php echo $item['reviews'];  ?> Reviews</p>

                        </div>
                    </div>

                    <ul class="admin-icon">
                            <a href='delete.php?id=<?php echo $item['id']; ?>'>
                            <span class="price-tag bg-black shadow-lg ms-4">Delete</span>
                            </a>    
                            <a href='update.php?id=<?php echo $item['id']; ?>'>
                            <span class="price-tag bg-black shadow-lg ms-4">Edit</span>
                            </a>
                       
                    </ul>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>



<section class="col-lg-8 col-12 ms-auto">
    <div class="col-lg-6 col-8">
        <form class="custom-form contact-form row" action="insert-item.php" method="post" role="form">
            <div class="col-lg-6 col-6">

                <p>Title</p>
                <input class="form-label" type="text" name="title" value="<?php echo $item['title']; ?>">

            </div>

            <div class="col-lg-6 col-6">

                <p>Price</p>
                <input class="form-label" type="text" name="price" value="<?php echo $item['price']; ?>">

            </div>

            <div class="col-lg-6 col-6">

                <p>Rating</p>
                <input type="text" class="form-input" min="0" name="rating" value="<?php echo $item['rating']; ?>">

            </div>

            <div class="col-lg-6 col-6">

                <p>Reviews</p>
                <input type="text" class="form-label" min="0" name="reviews" value="<?php echo $item['reviews']; ?>">

            </div>


            <div class="col-lg-6 col-6">

                <p>Category</p>
                <input type="text" class="form-label" name="category" value="<?php echo $item['category']; ?>">

            </div>

            <div class="col-lg-6 col-6">

                <p>Img src</p>
                <input class="form-label" type="text" name="img" value="<?php echo $item['img']; ?>">

            </div>

            <div class="col-lg-12 col-12 ms-auto">
                <button type="submit" class="form-control" name="insert">Add</button>
            </div>
        </form>
    </div>
</section>

<!-- JAVASCRIPT FILES -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/custom.js"></script>