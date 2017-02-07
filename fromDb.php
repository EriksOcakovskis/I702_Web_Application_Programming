<ul>
  <?php
    require_once "config.php";
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error)
      die("Connection to database failed:" .
        $conn->connect_error);
    $conn->query("set names utf8");
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