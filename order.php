<?php
if(!isset($_COOKIE["user_id"])){
  header('Location: login.php');
}

?>
<h1>Dettagli ordine</h1>
<?php

$con = mysqli_connect("localhost", "ecommerce", "cicciobello", "my_ecommerce");
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$stmt = $con->prepare("SELECT * FROM orders WHERE id = ?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();
$result = $stmt->get_result();

$row = $result->fetch_assoc();
?>

<div>ID: <?php echo($row['id']) ?> </div>
<div>Numero: <?php echo($row['order_number']) ?> </div>
<div>Notes: <?php echo($row['notes']) ?> </div>
<hr>

<div><a href="orders.php">Ordini</a></div>
<div><a href="area-riservata.php">Dashboard</a></div>
<hr>
<p><small>Copyright 2021</small></p>
