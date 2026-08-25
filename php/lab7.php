<?php
  echo "Today: " . date("Y-m-d") . "<br>";
  echo "Time: " . date("h:i A") . "<br>";
  echo "Day: " . date("l");
?>
<!-- header.php -->
<?php echo "<h3>Site Header</h3>"; ?>

<!-- main.php -->
<?php include("header.php"); ?>
<p>Main page content</p>
