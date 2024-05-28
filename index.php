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

$images = [];
// Ouvrir le répertoire actuel
$dir = 'public/img';

$directories = scandir($dir);
foreach ($directories as $directory) {

    if ($directory == '.' || $directory == '..' || !is_dir($dir . '/' . $directory)) {
        continue;
    }

    $files = scandir($dir . '/' . $directory);
    foreach ($files as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        $images[$directory][] = $file;
    }
}


require_once 'skeleton.php';

?>



