<?php 
require_once "../require/display-error.php";
require_once "../require/config.php";

$email_address = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
$repeat_password = mysqli_real_escape_string($conn, $_POST["repeat-password"]);

if (empty($email_address) || empty($password) || empty($repeat_password)) {
  echo "Fields can't be blank";

} else if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
  echo "Your email address is invalid";

} else if (strlen($password) < 7) {
  echo "Your password must be atleast 7 characters";

} else if ($password != $repeat_password) {
  echo "Your password is different";

} else {
    $sql = "SELECT * FROM user WHERE email_address = '{$email_address}'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);

    if ($rowCount > 0) {
      echo "Your email address is already taken";
    }
    else {
      $sql = "INSERT INTO user(email_address, password) VALUES('{$email_address}', '{$password}')";

      $result = mysqli_query($conn, $sql);
      echo "success";
    }
  }





