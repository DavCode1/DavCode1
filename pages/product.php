<?php

// récupérer un élément de la db
$sql="SELECT * FROM item WHERE id = :identifiant";

$stmt = $pdo->prepare($sql);
$stmt->execute(['identifiant' => $_GET['id']]);
$product = $stmt->fetch();

require "description.php";


?>

