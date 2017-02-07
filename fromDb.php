<ul>
  <?php
    $conn = $_SESSION["conn"];
    $results = $conn->query(
      "SELECT id,name,price FROM erik_shop_product;");
    $rows = $results->fetch_all(MYSQLI_ASSOC); // Pull ALL results
    $conn->close();

    foreach ($rows as $row) {
      ?>
        <li>
          <a href="description.php?id=<?=$row['id']?>">
            <?=$row["name"]?></a>
            <?=$row["price"]?>EUR
        </li>
      <?php
    }
  ?>
</ul>