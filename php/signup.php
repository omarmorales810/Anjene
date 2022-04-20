<?php 
require_once "../require/display-error.php";
require_once "../require/config.php";

function generateRandomString($length = 25) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}
//usage 
$myRandomString = generateRandomString(13);

$first_name = "";
$surname = "";
$phone_number = "";
$email_address = "";
$password = "";
$repeat_password = "";

$first_name = mysqli_real_escape_string($conn, $_POST["first-name"]);
$surname = mysqli_real_escape_string($conn, $_POST["surname"]);
$phone_number = mysqli_real_escape_string($conn, $_POST["phone-number"]);
$email_address = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
$repeat_password = mysqli_real_escape_string($conn, $_POST["repeat-password"]);

if (empty($first_name) || empty($surname) || empty($phone_number) || empty($email_address) || empty($password) || empty($repeat_password)) {
  echo "Fields can't be blank";

} else if (!is_numeric($phone_number)) {
  echo "Your phone number is invalid, must only contains number";

} else if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
  echo "Your email address is invalid";

} else if (strlen($password) < 7) {
  echo "Your password must be atleast 7 characters";

} else if ($password != $repeat_password) {
  echo "Your password is different";

} else {
  $sql = "SELECT * FROM users WHERE phone_number = '{$phone_number}'";
  $result = mysqli_query($conn, $sql);
  $rowCount = mysqli_num_rows($result);

  if ($rowCount > 0) {
    echo "Your phone number is already taken";
  }
  else {
    $sql = "SELECT * FROM users WHERE email_address = '{$email_address}'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);

    if ($rowCount > 0) {
      echo "Your email address is already taken";
    }
    else {
      $sql = "INSERT INTO users(unique_id, first_name, surname, phone_number, email_address, password) VALUES('{$myRandomString}', '{$first_name}', '{$surname}', '{$phone_number}', '{$email_address}', '{$password}')";
      $result = mysqli_query($conn, $sql);

      echo "success";
    }
  }
}




