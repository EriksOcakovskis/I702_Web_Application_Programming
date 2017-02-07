<a href="index.php">Back to product listing</a>

<?php
  $conn = $_SESSION["conn"];
  $statement = $conn->prepare(
    "SELECT `name`, `description`, `price` FROM" .
    " `erik_shop_product` WHERE `id` = ?");
  $statement->bind_param("i", $_GET["id"]);
  $statement->execute();
  $results = $statement->get_result();
  $row = $results->fetch_assoc();
?>

<span style="float:right;"><?=$row["price"];?>EUR</span>

<h1><?=$row["name"];?></h1>

<p>
  <?=$row["description"];?>
</p>