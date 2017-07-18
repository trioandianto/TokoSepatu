<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body,td,th {
	font-family: "Comic Sans MS", cursive;
	color: #900;
}
</style>
</head>
<?php
$conn = new mysqli("localhost", "root", "", "tokosepatu");
 if ($conn->connect_errno) {
 echo die("Failed to connect to MySQL: " . $conn->connect_error);
 }

 $kodeProvinsi = $_GET[kode_provinsi];
 if($_POST['simpan']){
	$kd_provinsi = mysqli_real_escape_string($conn, $_POST['kode_provinsi']);
 	$nama = mysqli_real_escape_string($conn,$_POST['nama_provinsi']);
 	$ongkos = mysqli_real_escape_string($conn, $_POST['ongkos_kirim']);
 
 $query = mysqli_query($conn,"UPDATE  provinsi SET  kode_provinsi =  '$kd_provinsi', nama_provinsi =  '$nama', biaya_kirim =  '$ongkos' WHERE  kode_provinsi =  '$kodeProvinsi'");
 	if ($query===TRUE){
	 echo "<script>alert('Data Berhasil Di Edit')
	 location.replace('menu_provinsi.php')</script>";
 	}
 	else {
	  echo "<script>alert('Data Gagal Di Edit')
	 location.replace('menu_provinsi.php')</script>";
	 
	 }
 }
	 	

?>

<body background="../../tugasakhir/S6zUsH8.jpg">
<form id="form1" name="form1" method="post" action="">
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
  <p>&nbsp;</p>
  <table width="598" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><div align="center"><strong><font size="+2">EDIT DATA PROVINSI </strong></div></td>
            </tr>
          </table>
  <p>&nbsp;</p>
  <table width="306" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="144" height="33">Kode Provinsi </td>
          <td width="10">:</td>
          <td width="152"><label for="kode_provinsi"></label>
          <input type="text" name="kode_provinsi" id="kode_provinsi" /></td>
        </tr>
        <tr>
          <td height="32">Nama Provinsi </td>
          <td>:</td>
          <td><label for="nama_provinsi"></label>
            <input type="text" name="nama_provinsi" id="nama_provinsi" /></td>
        </tr>
        <tr>
          <td height="28">Ongos Kirim </td>
          <td>:</td>
          <td><label for="ongkos_kirim"></label>
            <input type="text" name="ongkos_kirim" id="ongkos_kirim" /></td>
        </tr>
      </table>
      <p align="center">
        <input type="submit" name="simpan" id="simpan" value="Simpan" />
      </p></td>
  </tr>
</table>
</form>
</body>
</html>