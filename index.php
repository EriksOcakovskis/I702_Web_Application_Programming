<?php
  require_once "config.php";
  include "header.php";
  $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  if ($conn->connect_error)
    die("Connection to database failed:" .
      $conn->connect_error);
  $conn->query("set names utf8"); // Support umlaut characters
  $_SESSION["conn"] = $conn;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Leson 1</title>
    <meta charset="utf-8"/>
    <meta name="description" content="Leason 1">
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
  <body>
    <p>Testing some php</p>
    <?php include('l1.php');?>
    <br>
    <br>
    <form action="submit.php" method="post">
      Name:<br>
      <input type="text" name="name"><br>
      Price:<br>
      <input type="number" name="price"><br>
      Description:<br>
      <input type="textarea" name="description"><br>
      <br>
      <input type="submit" name="Submit">
    </form>
    <br>
    <br>
    <?php include('fromDb.php');?>
  </body>
</html>
<?php include "footer.php" ?>
