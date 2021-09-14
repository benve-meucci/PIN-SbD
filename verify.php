<h1>Verifica:</h1>
<?php

$con = mysqli_connect("localhost", "ecommerce", "cicciobello", "my_ecommerce");
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($con, "SELECT * FROM users WHERE username = '" . $_POST['txt_uname'] . "' AND password = '" . $_POST['txt_pwd'] . "'");
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($num_row > 0){
  setcookie("user_id", $row['id'], time() + (86400 * 30));
  header('Location: area-riservata.php');
} else {
  header('Location: errore.php');
}
?>

<hr>
<p><small>Copyright 2021</small></p>


