<?php
if(!isset($_COOKIE["user_id"])){
  header('Location: login.php');
}
?>
<h1>Ciao 
<?php 

$con = mysqli_connect("localhost", "ecommerce", "cicciobello", "my_ecommerce");
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($con, "SELECT * FROM users WHERE id = " . $_COOKIE["user_id"]);
$row = mysqli_fetch_array($result);
echo $row["name"];
?>

<h2>Questa è la tua area riservata</h2>
bla bla bla
<br>
<div><a href="orders.php">Visualizza ordini</a></div>
<br>
bla bla bla

<div><a href="logout.php">Disconnetti</a></div>
