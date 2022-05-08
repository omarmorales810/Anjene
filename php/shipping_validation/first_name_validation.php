<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");

$first_name = mysqli_real_escape_string($conn, $_POST["first-name"]);

if (empty($first_name)) {
  echo "blank-first-name";
}
else if (strlen($first_name) < 3) {
  echo "short-first-name";
}


