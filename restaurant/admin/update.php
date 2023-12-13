<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use restaurant\lib\DB;

$db = new DB("localhost", 3306, "root", "", "projekt");

if (!isset($_GET['id'])) {
    header("Location: home.php");
}

$item = $db->getItemsByID($_GET['id']);


?>


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


<section class="col-lg-8 col-12 ms-auto">
    <div class="col-lg-6 col-8">
        <form class="custom-form contact-form row" action="update-item.php" method="post" role="form">
        <p style="text-align:center">ID</p>
        <input type="text" name="id" value="<?php echo isset($item['id']) ? $item['id'] : ''; ?>">

        <div class="col-lg-6 col-6">
    <p>Title</p>
    <input class="form-label" type="text" name="title" value="<?php echo isset($item['title']) ? $item['title'] : ''; ?>" required>
</div>

<div class="col-lg-6 col-6">
    <p>Price</p>
    <input class="form-label" type="number" min="0" name="price" value="<?php echo isset($item['price']) ? $item['price'] : ''; ?>" required>
</div>

<div class="col-lg-6 col-6">
    <p>Rating</p>
    <input type="number" class="form-input" min="0" max="5" name="rating" value="<?php echo isset($item['rating']) ? $item['rating'] : ''; ?>" required>
</div>

<div class="col-lg-6 col-6">
    <p>Reviews</p>
    <input type="number" class="form-label" min="0" name="reviews" value="<?php echo isset($item['reviews']) ? $item['reviews'] : ''; ?>" required>
</div>

<div class="col-lg-6 col-6">
    <p>Category</p>
    <input type="text" class="form-label" name="category" value="<?php echo isset($item['category']) ? $item['category'] : ''; ?>" required>
</div>

<div class="col-lg-6 col-6">
    <p>Img src</p>
    <input class="form-label" type="text" name="img" value="<?php echo isset($item['img']) ? $item['img'] : ''; ?>" required>
</div>


            <div class="col-lg-12 col-12 ms-auto">
            <button type="submit" class="form-control" name="update">Update</button>
            </div>
        </form>
    </div>
</section>


<!-- JAVASCRIPT FILES -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/custom.js"></script>