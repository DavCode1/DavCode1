<?php

// récupérer un élément de la db
$sql = "SELECT item.*, category.label as category, theme.label as theme, GROUP_CONCAT(tag.id) as tag_ids
FROM `item` 
LEFT JOIN item_tag ON item.id = item_tag.item_id
LEFT JOIN tag ON tag.id = item_tag.tag_id
LEFT JOIN category ON item.category_id = category.id
LEFT JOIN theme ON item.theme_id = theme.id
WHERE item.id = :identifiant
GROUP BY item.id;";

$stmt = $pdo->prepare($sql);
$stmt->execute(['identifiant' => $_GET['id']]);
$product = $stmt->fetch();
$product_id = $product['id'];

$sql = "SELECT * FROM tag ORDER BY id ASC";
$stmt = $pdo->query($sql);
$tags = $stmt->fetchAll();

$sql = "SELECT * FROM comments ORDER BY id ASC";
$stmt = $pdo->query($sql);
$comments = $stmt->fetchAll();



require "description.php";


?>

