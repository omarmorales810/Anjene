<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");
$city_municipality = mysqli_real_escape_string($conn, $_POST["city-municipality"]);

if (empty($city_municipality)) {
  echo "blank-municipality";
}

