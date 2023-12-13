<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>About Crispy Kitchen HTML Template</title>

        <!-- CSS FILES -->        
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

            <header class="site-header site-about-header">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <h1 class="text-white">Kitchen's Story</h1>

                            <strong class="text-white">this is how our kitchen evolved in new digital era</strong>
                        </div>

                    </div>
                </div>

                <div class="overlay"></div>
            </header>

            <section class="about section-padding bg-white">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-2">
                            <h4 class="mb-3">Crispy Kitchen is the latest Bootstrap 5 HTML template provided by Tooplate website.</h4>

                            <a href="news.html" class="custom-btn btn btn-dark mt-3">Check out News</a>

                            <a href="contact.html" class="custom-btn btn btn-danger mt-3 ms-3">Say Hi</a>
                        </div>

                        <div class="col-lg-6 col-12">
                        
                        	<p>Since this website template is 100% free to use, you can edit and apply it for your commercial restaurant websites. There are 6 HTML pages included in this template. Please <strong>click "Reservation" button</strong> on the top right to see the pop-up reservation form.</p>
                        
                            <p>You are NOT allowed to redistribute the template ZIP file on any template donwnload website. Please <a href="https://www.tooplate.com/contact" target="_blank">contact us</a> for more information.</p>

                        </div>

                    </div>
                </div>
            </section>

            <section class="about section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5">Team Members</h2>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="team-thumb">
                                <img src="images/team/matthew-hamilton-tNCH0sKSZbA-unsplash.jpg" class="img-fluid team-image" alt="">
                                
                                <div class="team-info">
                                    <h4 class="mt-3 mb-0">Sophia</h4>

                                    <p>CEO &amp; Founder</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 my-lg-0 my-4">
                            <div class="team-thumb">
                                <img src="images/team/nicolas-horn-MTZTGvDsHFY-unsplash.jpg" class="img-fluid team-image" alt="">

                                <h4 class="mt-3 mb-0">Benjamin W.</h4>

                                <p>Restaurant Manager</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="team-thumb">
                                <img src="images/team/rc-cf-FMh5o5m5N9E-unsplash.jpg" class="img-fluid team-image" alt="">
                                
                                <h4 class="mt-3 mb-0">Muchen Jack</h4>

                                <p>Senior Chef</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            
            <section class="newsletter section-padding bg-white">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="images/charles-deluvio-FdDkfYFHqe4-unsplash.jpg" class="img-fluid newsletter-image" alt="">
                        </div>

                        <div class="col-lg-6 col-12 d-flex align-items-center mt-5 mt-lg-0 mx-auto">
                            <div class="subscribe-form-wrap">
                                <h4 class="mb-0">Our Newsletter</h4>

                                <p>The food news every day</p>

                                <form class="custom-form subscribe-form mt-4" role="form">
                                    <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your email address" required="">

                                    <button type="submit" class="form-control mb-3" id="subscribe">Subscribe</button>

                                    <small>By signing up, you agree to our Privacy Notice and the data policy</small>
                                    </div>
                                </form>
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
