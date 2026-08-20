<?php
  $file = fopen("data.txt", "w");
  fwrite($file, "Hello from PHP file handling.\n");
  fwrite($file, "Second line.");
  fclose($file);

  $read = fopen("data.txt", "r");
  echo nl2br(fread($read, filesize("data.txt")));
  fclose($read);
?>

<form method="post" enctype="multipart/form-data">
  <input type="file" name="myfile">
  <button type="submit">Upload</button>
</form>
<?php
  if (isset($_FILES["myfile"])) {
    move_uploaded_file($_FILES["myfile"]["tmp_name"], "uploads/" . $_FILES["myfile"]["name"]);
    echo "File uploaded: " . $_FILES["myfile"]["name"];
  }
?>
