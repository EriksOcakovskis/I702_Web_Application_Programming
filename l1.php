<?php
  $x="Hi harsh world";
  echo $x;

  echo"\n";

  $num = 23.546;
  var_dump($num);


  $fname = "submit.php";
  $fHandle = fopen($fname, "r");
  $out = fread($fHandle, filesize($fname));
  fclose($fHandle);

  echo '"' + $out + '"';
?>