<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php session_start();
if (isset($_SESSION['username'])){
	include "koneksi.php";
	?>
 <h1>Isi dengan script Yang di Inginkan </h1>
 <a href="logoutadmin.php"></a>
 <?php }
else { ?> Anda Tidak Boleh mengakses halaman ini. Silahkan <a href="loginadmin.php">Login Terlebih Dahulu</a><?php }
?>
</body>
</html>