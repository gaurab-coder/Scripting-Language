<?php
  $fruits = array("Apple", "Banana", "Mango");
  foreach ($fruits as $f) echo $f . " ";
  echo "<br>";

  $student = array("name" => "Gaurab", "age" => 20);
  echo $student["name"] . " is " . $student["age"] . " years old<br>";

  function square($n) { return $n * $n; }
  echo "Square of 10: " . square(10) . "<br>";

  function greet($name = "Guest") { return "Hello, $name!"; }
  echo greet() . "<br>" . greet("Gaurab");
?>
