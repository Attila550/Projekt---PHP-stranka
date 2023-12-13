<?php
include_once "lib/Common.php";
include_once "lib/DB.php";

use restaurant\lib\Common;
use restaurant\lib\DB;

$common = new Common();
$db = new DB("localhost", 3306, "root", "", "Projekt");
?>


<nav class="navbar navbar-expand-lg bg-white shadow-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="index.html">
            Crispy Kitchen
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                
                <?php
                $menu = $db->getMenuItems();
                foreach ($menu as $menuName => $menuUrl) {
                    echo '<li class="nav-item"><a class="nav-link" href="' . $menuUrl . '">' . $menuName . '</a></li>';
                }
                ?>

                <li class="nav-item"><a class="nav-link" href="http://localhost/Projekt/restaurant/admin/login.php">Login</a></li>

            </ul>
        </div>


    </div>
</nav>