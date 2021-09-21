<?php
if(!isset($_COOKIE["user_id"])){
  header('Location: login.php');
} else {
  setcookie("user_id", $_COOKIE["user_id"], time() + 5);
}
?>

<h1>Ordini</h1>
<?php

$con = mysqli_connect("localhost", "ecommerce", "cicciobello", "my_ecommerce");
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($con, "SELECT * FROM orders WHERE user_id = " . $_COOKIE["user_id"]);

while($row = $result->fetch_assoc()){
?>
  <div>Numero: 
  <a href="order.php?id=<?php echo $row['id'] ?>">
    <?php echo($row['order_number']); ?>
  </a>
</div>
  <hr>
<?php
}
?>
<div><a href="area-riservata.php">Dashboard</a></div>
<hr>
<p><small>Copyright 2021</small></p>

