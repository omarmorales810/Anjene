<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");

$address = mysqli_real_escape_string($conn, $_POST["address"]);

if (empty($address)) {
  echo "blank-address";
}
else if (strlen($address) < 5) {
  echo "short-address";
}

