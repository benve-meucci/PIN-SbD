<?php
if(isset($_COOKIE["user_id"])){
  header('Location: area-riservata.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Apache2 Ubuntu Default Page: It works</title>
  </head>
  <body>
    <div class="container">
      <form method="post" action="verify.php">
        <div id="div_login">
          <h1>Login</h1>
          <div>
            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
          </div>
          <div>
            <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
          </div>
          <div>
            <input type="submit" value="Submit" name="but_submit" id="but_submit" />
          </div>
        </div>
      </form>
    </div>
  </body>
</html>

