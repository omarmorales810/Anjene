<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");
$bag_item_product_id = $_GET["item_id"];

$sql = "UPDATE bag_item SET quantity = quantity - 1 WHERE id = {$bag_item_product_id}";
$result = mysqli_query($conn, $sql);

echo $bag_item_product_id;