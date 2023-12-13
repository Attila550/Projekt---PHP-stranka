<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'lib/DB.php';
$dbInstance = new \restaurant\lib\DB();

$restaurantItems = $dbInstance -> getItems();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crispy Kitchen</title>

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

    if(!isset($common)) {
        $common = new stdClass();
    }
    ?>

    

    <main>

        <section class="hero">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12 m-auto">
                        <div class="heroText">

                            <h1 class="text-white mb-lg-5 mb-3">Delicious Steaks</h1>

                            <div class="c-reviews my-3 d-flex flex-wrap align-items-center">
                                <div class="d-flex flex-wrap align-items-center">
                                    <h4 class="text-white mb-0 me-3">4.4/5</h4>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>
                                </div>

                                <p class="text-white w-100">From <strong>1,206+</strong> Customer Reviews</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-12">
                        <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-image-wrap">
                                        <img src="images/slide/jay-wennington-N_Y88TWmGwA-unsplash.jpg" class="img-fluid carousel-image" alt="">
                                    </div>

                                    <div class="carousel-caption">
                                        <span class="text-white">
                                            <i class="bi-geo-alt me-2"></i>
                                            Manhattan, New York
                                        </span>

                                        <h4 class="hero-text">Fine Dining Restaurant</h4>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-image-wrap">
                                        <img src="images/slide/jason-leung-O67LZfeyYBk-unsplash.jpg" class="img-fluid carousel-image" alt="">
                                    </div>

                                    <div class="carousel-caption">
                                        <div class="d-flex align-items-center">
                                            <h4 class="hero-text">Steak</h4>

                                            <span class="price-tag ms-4"><small>$</small>26.50</span>
                                        </div>

                                        <div class="d-flex flex-wrap align-items-center">
                                            <h5 class="reviews-text mb-0 me-3">3.8/5</h5>

                                            <div class="reviews-stars">
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star reviews-icon"></i>
                                                <i class="bi-star reviews-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-image-wrap">
                                        <img src="images/slide/ivan-torres-MQUqbmszGGM-unsplash.jpg" class="img-fluid carousel-image" alt="">
                                    </div>

                                    <div class="carousel-caption">
                                        <div class="d-flex align-items-center">
                                            <h4 class="hero-text">Sausage Pasta</h4>

                                            <span class="price-tag ms-4"><small>$</small>18.25</span>
                                        </div>

                                        <div class="d-flex flex-wrap align-items-center">
                                            <h5 class="reviews-text mb-0 me-3">4.2/5</h5>

                                            <div class="reviews-stars">
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star reviews-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="video/production_ID_3769033.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="overlay"></div>
        </section>

        <section class="menu section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="text-center mb-lg-5 mb-4">Special Menus</h2>
                    </div>
                    <?php foreach($restaurantItems as $item): ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="<?php echo $item['img'];  ?>" class="img-fluid menu-image" alt="">
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0"><?php echo $item['title'];  ?></h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small><?php echo $item['price'];  ?></span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3"><?php echo $item['rating'];  ?>/5</h6>

                                    <p class="reviews-text mb-0 ms-4"><?php echo $item['reviews'];  ?> Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <section class="BgImage"></section>

        <section class="news section-padding">
            <div class="container">
                <div class="row">

                    <h2 class="text-center mb-lg-5 mb-4">News &amp; Events</h2>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="news-thumb mb-4">
                            <a href="news-detail.html">
                                <img src="images/news/pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg" class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info news-text-info-large">
                                <span class="category-tag bg-danger">Featured</span>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.html" class="news-title-link">Healthy Lifestyle and happy living tips</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="news-thumb mb-4">
                            <a href="news-detail.html">
                                <img src="images/news/stefan-johnson-xIFbDeGcy44-unsplash.jpg" class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info news-text-info-large">
                                <span class="category-tag bg-danger">Featured</span>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.html" class="news-title-link">How to make a healthy meal</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="news-thumb mb-lg-0 mb-lg-4 mb-0">
                            <a href="news-detail.html">
                                <img src="images/news/gilles-lambert-S_LhjpfIdm4-unsplash.jpg" class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info">
                                <span class="category-tag me-3 bg-info">Promotions</span>

                                <strong>8 April 2022</strong>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.html" class="news-title-link">Is Coconut good for you?</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="news-thumb mb-lg-0 mb-lg-4 mb-2">
                            <a href="news-detail.html">
                                <img src="images/news/caroline-attwood-bpPTlXWTOvg-unsplash.jpg" class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info">
                                <span class="category-tag">News</span>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.html" class="news-title-link">Salmon Steak Noodle</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="news-thumb mb-4">
                            <a href="news-detail.html">
                                <img src="images/news/louis-hansel-GiIiRV0FjwU-unsplash.jpg" class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info">
                                <span class="category-tag me-3 bg-info">Meeting</span>

                                <strong>30 April 2022</strong>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.html" class="news-title-link">Making a healthy salad</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

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