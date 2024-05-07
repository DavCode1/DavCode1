<?php

// récupérer un élément de la db
$sql="SELECT * FROM item WHERE id = 1";

$stmt = $pdo->query($sql);
$product = $stmt->fetch();
require "description.php";

// affiche cet élément dans la page avec le partiel description.php