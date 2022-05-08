<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");

$surname = mysqli_real_escape_string($conn, $_POST["surname"]);

if (empty($surname)) {
  echo "blank-surname";
}
else if (strlen($surname) < 3) {
  echo "short-surname";
}


