<form method="post" action="">
  Name: <input type="text" name="uname">
  <button type="submit">Submit</button>
</form>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["uname"];
    echo "Hello, " . htmlspecialchars($name) . "<br>";
    echo "Via POST: " . $_POST["uname"];
  }
?>
