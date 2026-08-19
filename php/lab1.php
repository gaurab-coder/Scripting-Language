<?php
  $name = "Gaurab";
  $age = 20;
  echo "Name: $name, Age: $age<br>";

  if ($age >= 18) {
    echo "Adult<br>";
  } else {
    echo "Minor<br>";
  }

  for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
  }
  echo "<br>";

  $i = 0;
  while ($i < 3) {
    echo "Loop $i<br>";
    $i++;
  }
?>
