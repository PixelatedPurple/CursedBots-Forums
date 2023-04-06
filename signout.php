<link rel="stylesheet" href="/styles.css"/>
<title>CursedBots | Forum | Logout</title>
<?php
session_start();
require 'header2.php';
if($_SESSION['LOGGED_IN']) {
  session_unset();
  session_destroy();
  echo "<br>Logged out <br> <button onclick=location.href='/index.php'>Home</button>";
} else {
  echo "You are not logged in. <br> <button onclick=location.href='/login.php'>Login</button> <button onclick=location.href='/index.php'>Home</button>";
}
?>
