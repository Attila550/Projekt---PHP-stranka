<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use restaurant\lib\DB;

$db = new DB("localhost", 3306, "root", "", "projekt");

try {
    if(isset($_POST['insert'])) {
        $insert = $db->insertItem($_POST['img'], $_POST['title'], $_POST['rating'], $_POST['reviews'], $_POST['price'], $_POST['category']);

        if($insert) {
            header("Location: home.php?status=1");
        } else {
            header("Location: home.php?status=2");
        }
    } else {
        header("Location: home.php");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
