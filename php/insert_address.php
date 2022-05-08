<?php
session_start();
$user = $_SESSION["user"];
$conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");

$first_name = mysqli_real_escape_string($conn, $_POST["first-name"]);
$surname = mysqli_real_escape_string($conn, $_POST["surname"]);
$mobile_number = mysqli_real_escape_string($conn, $_POST["mobile"]);
$address = mysqli_real_escape_string($conn, $_POST["address"]);
$city_municipality = mysqli_real_escape_string($conn, $_POST["city-municipality"]);
$barangay = mysqli_real_escape_string($conn, $_POST["barangay"]);

$sql = "SELECT * FROM user_info WHERE user_id = {$user}";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);

if ($rowCount > 0) {
  if (!empty($first_name) && !empty($surname) && !empty($mobile_number) && !empty($address) && !empty($city_municipality) && !empty($barangay) && is_numeric($mobile_number) && strlen($first_name) && strlen($surname) && strlen($address)) {
    $sql = "UPDATE user_info SET first_name = '{$first_name}', surname = '{$surname}', mobile = '{$mobile_number}', house_address = '{$address}', municipality_city = '{$city_municipality}', barangay = '{$barangay}' WHERE user_id = {$user}";
    $result = mysqli_query($conn, $sql);
  
    echo "insert-address-success";
  }
  else {
    echo "Something went wrong";
  }
}
else {
  if (!empty($first_name) && !empty($surname) && !empty($mobile_number) && !empty($address) && !empty($city_municipality) && !empty($barangay) && is_numeric($mobile_number) && strlen($first_name) && strlen($surname) && strlen($address)) {
    $sql = "INSERT INTO user_info(user_id, first_name, surname, mobile, house_address, municipality_city, barangay) VALUES('{$user}', '{$first_name}', '{$surname}', '{$mobile_number}', '{$address}', '{$city_municipality}', '{$barangay}')";
    $result = mysqli_query($conn, $sql);
  
    echo "insert-address-success";
  }
  else {
    echo "Something went wrong";
  }
}


