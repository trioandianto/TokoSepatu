<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	font-family: "Comic Sans MS", cursive;
	color: #900;
}
</style>
</head>
<?php
 //mengatasi error notice dan warning
 //error ini biasa muncul jika dijalankan di localhost, jika online tidak ada masalah
 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 
 $conn = new mysqli("localhost", "root", "", "tokosepatu");
 if ($conn->connect_errno) {
 echo die("Failed to connect to MySQL: " . $conn->connect_error);
 }
 
 if($_POST['submit']){
	 $password1 = mysqli_real_escape_string($conn, $_POST['password_baru']);
	$password2 = mysqli_real_escape_string($conn, $_POST['konfirmasi_password']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password_lama = mysqli_real_escape_string($conn, $_POST['password_lama']);
	
	$select_password = mysqli_query($conn, "SELECT * from admin WHERE username='$username'");
	$row = mysqli_fetch_assoc($select_password);
	$passwordlama = $row['password'];
	if($passwordlama != $password_lama){
		echo "Password lama tidak benar!";
	}
	else {
		
		if ($password1 <> $password2)
		{
			echo "Konfirmasi password baru tidak sesuai";
		}
		else if (mysqli_query($conn, "UPDATE admin SET password='$password1' WHERE username='$username'"))
		{
			echo "Berhasil ganti password.";
		}
		else
		{
			mysqli_error($conn);
		}
	}
	

mysqli_close($conn);
 
 }
 ?>
<body background="../../tugasakhir/S6zUsH8.jpg">
<form action="" method="post">
<h1 align="center">Toko Sepatu Online</h1>
  <p>&nbsp;</p>
  <div align="center">
<table width="1083" height="109" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="180" height="49"><div align="left"><strong><a href="home.php">Beranda </a></strong></div></td>
        <td width="238"><div align="left"><strong><a href="ganti_password.php">Ganti Password</a></strong></div></td>
        <td width="295"><div align="left"><strong><a href="menu_provinsi.php">Menu Provinsi</a></strong></div></td>
        <td width="196"><div align="left"><strong><a href="menu_kategori.php">Menu Kategori</a></strong></div></td>
        <td width="166"><div align="left"><strong><a href="menu_barang.php">Menu Barang</a></strong></div></td>
    </tr>
      <tr>
        <td height="52"><div align="left"><strong><a href="menu_pembeli.php">Menu Pembeli </a></strong></div></td>
        <td><div align="left"><strong><a href="pemesanan_barang.php">Pemesanan Barang </a></strong></div></td>
        <td><div align="left"><strong><a href="konfirmasi_pembayaran.php">Konfirmasi Pembayaran </a></strong></div>
        <div align="left"></div></td>
        <td><div align="left"><strong><a href="info_pengiriman.php">Info Pengiriman </a></strong></div></td>
        <td><div align="left"><strong><a href="logout.php">Logout</a></strong></div></td>
      </tr>
</table>
    <div align="center">
    <p>&nbsp;</p>
</div>
  <tr>
      <td height="171" colspan="6"><table width="500" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="31" colspan="3"><p><font size="+2"><strong>Ganti Password Admin </strong></font></p>
          <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td width="166" height="31">Username</td>
          <td width="10">:</td>
          <td width="324"><input type="text" name="username" id="username" /></td>
        </tr>
        <tr>
          <td height="35">Password Lama</td>
          <td>:</td>
          <td><label for="password_lama">
            <input type="password" name="password_lama" id="password_lama" />
          </label></td>
        </tr>
        <tr>
          <td height="34">Password Baru</td>
          <td>:</td>
          <td><input type="password" name="password_baru" id="password_baru" /></td>
        </tr>
        <tr>
          <td height="34">Password Baru Lagi</td>
          <td>:</td>
          <td><form id="form1" name="form1" method="post" action="">
            <label for="konfirmasi_password"></label>
            <input type="password" name="konfirmasi_password" id="konfirmasi_password" />
          </form>            <label for="password_lama"></label></td>
        </tr>
        <tr>
          <td colspan="3"><div align="center">
            <input type="submit" name="submit" id="submit" value="Simpan" />
          </div></td>
        </tr>
        
      </table>
    <div align="center"></div></td>
    </tr>
</body>

