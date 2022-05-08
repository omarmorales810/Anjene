<?php
session_start();
$session_id = $_SESSION["user"];

$conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");

$sql = "DELETE FROM bag_item WHERE session_id = {$session_id}";
$result = mysqli_query($conn, $sql);