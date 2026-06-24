<?php
include 'db.php';
$u = $_POST['username'];
$p = $_POST['password'];
if($u == "admin" && $p == "admin123"){
  header("Location:stock.php");
} else {
  echo "Wrong! <a href='login.html'>Try again</a>";
}
?>
