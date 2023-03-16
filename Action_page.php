<?php
  // Lấy giá trị username và password từ $_POST
  $username = $_POST['userName'];
  $password = $_POST['userPassword'];

  // Hiển thị giá trị đã lấy được
  echo "Username: " . $username . "<br>";
  echo "Password: " . $password . "<br>";
?>