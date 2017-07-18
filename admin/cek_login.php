<?php
include "koneksi.php";

$login  = mysql_query("SELECT * FROM admin WHERE username='$_POST[username]' AND password='$_POST[password]'");
$ketemu = mysql_num_rows($login);
$r      = mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION['username']=$r['username'];
  $_SESSION['password']=$r['password'];
  header('location:home.php');
}
else{
  echo "<center>Login gagal! Username & password salah<br>";
  echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
}
?>