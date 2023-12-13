<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'lib/DB.php';
$dbInstance = new \restaurant\lib\DB();

$restaurantItems = $dbInstance->getItems();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crispy Kitchen Menu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">

</head>

<body>
    <?php
    include_once "parts/header.php";
    ?>

    <main>

        <header class="site-header site-menu-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 mx-auto">
                        <h1 class="text-white">Our Menus</h1>

                        <strong class="text-white">Perfect for all Breakfast, Lunch and Dinner</strong>
                    </div>

                </div>
            </div>

            <div class="overlay"></div>
        </header>

        <?php
        $categories = []; 

        foreach ($restaurantItems as $item) {
            $categories[] = $item['category']; 
        }

        $uniqueCategories = array_unique($categories);

        foreach ($uniqueCategories as $category) {
        ?>
            <section class="menu section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-lg-5 mb-4"><?php echo ucfirst($category); ?> Menu</h2>
                        </div>

                        <?php foreach ($restaurantItems as $item) : ?>
                            <?php if ($item['category'] == $category) : ?>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="menu-thumb">
                                        <img src="<?php echo $item['img']; ?>" class="img-fluid menu-image" alt="">

                                        <div class="menu-info d-flex flex-wrap align-items-center">
                                            <h4 class="mb-0"><?php echo $item['title']; ?></h4>

                                            <span class="price-tag bg-white shadow-lg ms-4">
                                                <small>$</small><?php echo $item['price']; ?>
                                            </span>

                                            <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                                <h6 class="reviews-text mb-0 me-3"><?php echo $item['rating']; ?>/5</h6>

                                                <p class="reviews-text mb-0 ms-4">
                                                    <?php echo $item['reviews']; ?> Reviews
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </div>
                </div>
            </section>
        <?php } ?>

    </main>

    <?php
    include_once "parts/footer.php";
    ?>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>