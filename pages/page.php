<?php

$sql="SELECT * FROM item WHERE id = 2";

$stmt = $pdo->query($sql);
$page = $stmt->fetch();
require "description-page-2.php";