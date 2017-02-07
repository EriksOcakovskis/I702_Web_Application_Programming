<?php
  $conn = $_SESSION["conn"]
  $sql = $conn->prepare(
    "INSERT INTO erik_shop_product (
      name,
      price,
      description)
     VALUES (?,?,?)")
  $sql->bind_param(
    $_POST["name"],
    $_POST["price"],
    $_POST["description"]);

  if ($sql->execute()) {
    echo "Registration was successful! <a href=\"index.php\">Back to main page</a>";
  } else {
      if ($sql->errno == 1062) {
         // This will result in 200 OK
         echo "This e-mail is already registered";
      } else {
         // This will result in 500 Internal server error
         die("Execute failed: (" .
             $sql->errno . ") " . $sql->error);
      }
  }
?>
