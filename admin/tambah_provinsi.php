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
 
 if($_POST['simpan']){
	 $kodeProvinsi = mysqli_real_escape_string($conn, $_POST['kode_provinsi']);
	 $namaprovinsi = mysqli_real_escape_string($conn, $_POST['nama_provinsi']);
	 $ongkoskirim = mysqli_real_escape_string($conn, $_POST['ongkos_kirim']);
	 
	 $select_kodeprovinsi = mysqli_query($conn, "INSERT INTO provinsi (kode_provinsi, nama_provinsi, biaya_kirim) VALUES ('$kodeProvinsi', '$namaprovinsi', $ongkoskirim)");
	 if($select_kodeprovinsi===TRUE){
		 echo "<script>alert('Data Berhasil Di Simpan')
	 	location.replace('menu_provinsi.php')</script>";	 
		 
	 }
	 else {
		 echo "Gagal";
	 }
	

	mysqli_close($conn);
 
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
              <td><div align="center"><strong><font size="+2">TAMBAH DATA PROVINSI </strong></div></td>
            </tr>
          </table>
  <p>&nbsp;</p>
  <table width="306" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="144" height="33">Kode Provinsi </td>
          <td width="10">:</td>
          <td width="152"><label for="kode_provinsi1"></label>
          <input type="text" name="kode_provinsi" id="kode_provinsi" /></td>
        </tr>
        <tr>
          <td height="32">Nama Provinsi </td>
          <td>:</td>
          <td><label for="nama_provinsi1"></label>
          <input type="text" name="nama_provinsi" id="nama_provinsi" /></td>
        </tr>
        <tr>
          <td height="28">Ongos Kirim </td>
          <td>:</td>
          <td><label for="ongkos_kirim1"></label>
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