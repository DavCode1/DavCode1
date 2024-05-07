<?php

$page = 'home';

if (isset($_GET['page'])) {
    $page = realpath('pages/' . $_GET['page'] . '.php');
} elseif (isset($_GET['action'])) {
    die('SINGLE ACTION NO PAGE');
} else {
    $page = 'home';
}
require_once "connection.php";
include 'skeleton.php';

?>



