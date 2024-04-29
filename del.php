<?php


$id = $_GET['idd'];

$pdo = new PDO(
    "mysql:dbname=ensetphp",
    'root',
    ''
);

$sql = "DELETE FROM users WHERE id=$id";

$stmt = $pdo->exec($sql);

header('location:index.php');