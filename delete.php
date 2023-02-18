<?php

session_start();
$db = mysqli_connect('localhost', 'root', '', 'phpcrud');
include 'json/json_connection.php';
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM mobile WHERE id=$id");
    $_SESSION['message'] = "Device was deleted!";
    header('location: table.php');
}
