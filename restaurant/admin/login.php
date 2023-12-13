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


session_start();
const USERNAME = "admin";
const PASSWORD = "admin";

if(isset($_POST['login'])) {
    if($_POST['username'] == USERNAME && $_POST['password'] == PASSWORD) {
        $_SESSION['login'] = true;
        header("Location: home.php");
    } else {
        header("Location: login.php?error=1");
    }
}

if(isset($_GET['error'])) {
    echo "<p style='color: red'>Nespravne meno alebo heslo</p><br>";
}
?>

<section class="col-lg-8 col-12 ms-auto p-3">
    <div class="col-lg-6 col-8 mx-auto">
        <form class="custom-form contact-form row" action="" method="post" role="form">
            <div class="col-lg-6 col-12">
                <label for="" class="form-label">Username</label>
                <input type="text" name="username" value="" placeholder="Username" class="form-control" required>
                
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" value="" placeholder="Password" class="form-control" required>

                <input class="form-control" type="submit" name="login" value="Login">
            </div>
        </form>
    </div>
</section>
