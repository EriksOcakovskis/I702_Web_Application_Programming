<?php
  require_once "config.php";
  $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  if ($conn->connect_error)
    die("Connection to database failed:" .
      $conn->connect_error);
  $conn->query("set names utf8");
  $sql = $conn->prepare(
    "INSERT INTO erik_shop_product (
      name,
      price,
      description)
     VALUES (?,?,?)");

  $sql->bind_param("sds",
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
