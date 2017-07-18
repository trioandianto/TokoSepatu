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
 
 if(isset($_POST['simpan'])){
	
	 $jenis_kelamin = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);
	 $kode_pembeli = mysqli_real_escape_string($conn, $_POST['kode_pembeli']);
	 $nama_pembeli = mysqli_real_escape_string($conn, $_POST['nama_pembeli']);
	 $no_telp = mysqli_real_escape_string($conn, $_POST['no_telp']);
	 $email = mysqli_real_escape_string($conn, $_POST['email']);;
	 $username = mysqli_real_escape_string($conn, $_POST['username']);
	 $rawdate =mysqli_real_escape_string($conn,$_POST['date']);
	 $date = date('y-m-d', strtotime($rawdate));;
	 
	 
	 $insert_barang = mysqli_query($conn, "INSERT INTO pembeli (id_pembeli, nama_pembeli, gender, email, telepon, username, tgl_daftar) VALUES ('$kode_pembeli', '$nama_pembeli', '$jenis_kelamin', '$email', '$no_telp', '$username','$date')");
	 if($insert_barang===TRUE){
		 echo "<script>alert('Data Berhasil Di Simpan')
	 	location.replace('menu_pembeli.php')</script>";	 
		 
	 }
	 else {
		 echo "Gagal";
		 echo $filename;
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
              <td><div align="center"><font size="+2"><strong>TAMBAH DATA PEMBELI </strong></font></div></td>
  </tr>
</table>
<p>&nbsp;</p>
  <table width="306" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="144" height="40">Kode Pembeli </td>
          <td width="10">:</td>
          <td width="152"><label for="kode_pembeli"></label>
          <input type="text" name="kode_pembeli" id="kode_pembeli" /></td>
        </tr>
        <tr>
          <td height="39">Nama Pembeli </td>
          <td>:</td>
          <td><label for="nama_pembeli"></label>
          <input type="text" name="nama_pembeli" id="nama_pembeli" /></td>
        </tr>
        <tr>
          <td height="36">Jenis Kelamin </td>
          <td>:</td>
          <td><label for="jenis_kelamin"></label>
          <input type="text" name="jenis_kelamin" id="jenis_kelamin" /></td>
        </tr>
        <tr>
          <td height="39">No Telepon</td>
          <td>:</td>
          <td>
            <label for="no_telp"></label>
            <input type="text" name="no_telp" id="no_telp" /></td>
        </tr>
        <tr>
          <td height="36">E-mail</td>
          <td>:</td>
          <td>
            <label for="e_mail"></label>
            <input type="text" name="email" id="email" />
          </td>
        </tr>
        <tr>
          <td height="37">Username </td>
          <td>:</td>
          <td><label for="username"></label>
            <input type="text" name="username" id="username" /></td>
        </tr>
        <tr>
          <td height="37">Tanggal Daftar </td>
          <td>:</td>
          <td>
            <label for="date"></label>
            <input type="date" name="date" id="date" />
          </td>
        </tr>
</table>
      <p align="center">
        <input type="submit" name="simpan" id="simpan" value="Simpan" />
</p></td>
  </tr>
</table>
</body>
</html>