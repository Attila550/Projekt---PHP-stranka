<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use restaurant\lib\DB;

$db = new DB("localhost", 3306, "root", "", "projekt");

    if(isset($_POST['update'])) {
        $update = $db->updateItem($_POST['id'],$_POST['img'], $_POST['title'], $_POST['rating'], $_POST['reviews'], $_POST['price'], $_POST['category']);

        if($update) {
            header("Location: home.php?status=5");
        } else {
            header("Location: home.php?status=6");
        }
    } else {
        header("Location: home.php");
    }

?>
