<a href="index.php">Back to product listing</a>
<br>
<?php
  session_start();
  $product_id = intval($_POST["id"]);
  if (array_key_exists($product_id, $_SESSION["cart"])) {
      $_SESSION["cart"][$product_id] += 1;
  } else {
      $_SESSION["cart"][$product_id] = 1;
  }
  var_dump($_SESSION["cart"]);
?>