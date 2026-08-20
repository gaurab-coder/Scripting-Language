<?php
  session_start();
  $_SESSION["user"] = "Gaurab";
  $_SESSION["role"] = "student";
  echo "Session user: " . $_SESSION["user"] . ", role: " . $_SESSION["role"] . "<br>";

  setcookie("username", "Gaurab", time() + 3600);
  if (isset($_COOKIE["username"])) {
    echo "Cookie found: " . $_COOKIE["username"];
  } else {
    echo "Cookie set (visible on next reload).";
  }
?>
