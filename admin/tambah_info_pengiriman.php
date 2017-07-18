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
	 
	 
	 $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
	 $nama_barang = mysqli_real_escape_string($conn, $_POST['nama_barang']);
	 $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
	 $harga_barang = mysqli_real_escape_string($conn, $_POST['harga_barang']);
	 $id_barang = mysqli_real_escape_string($conn, $_POST['id_barang']);
	 $berat_barang = mysqli_real_escape_string($conn, $_POST['berat_barang']);;
	 $stock = mysqli_real_escape_string($conn, $_POST['stock']);
	 
	 
	 $insert_barang = mysqli_query($conn, "INSERT INTO barang (id_barang, nama_barang, harga_jual, berat_barang, stok, deskripsi, gambar, id_kategori) VALUES ('$id_barang', '$nama_barang', $harga_barang, $berat_barang, $stock, '$deskripsi','','OK')");
	 if($insert_barang===TRUE){
		 echo "<script>alert('Data Berhasil Di Simpan')
	 	location.replace('menu_barang.php')</script>";	 
		 
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
<p align="center"><font size="+2">TAMBAH INFO PENGIRIMAN </font></p>
<p>&nbsp;</p>
<div align="center">
  <table width="687" height="230" border="0" cellpadding="0" cellspacing="0">
  <tr>
      <td width="195">ID PENGIRIMAN</td>
      <td width="6">:</td>
      <td width="516"><label for="id_pengiriman"></label>
        <input type="text" name="id_pengiriman" id="id_pengiriman" /></td>
      </tr>
    <tr>
      <td width="195">Nomer Transaksi</td>
      <td width="6">:</td>
      <td width="516"><label for="nomer_transaksi"></label>
        <input type="text" name="nomer_transaksi" id="nomer_transaksi" /></td>
      </tr>
    <tr>
      <td>Nama Penerima</td>
      <td>:</td>
      <td><label for="nama_penerima"></label>
        <input type="text" name="nama_penerima" id="nama_penerima" /></td>
      </tr>
    <tr>
      <td>No Resi</td>
      <td>:</td>
      <td><label for="no_resi"></label>
        <input type="text" name="no_resi" id="no_resi" /></td>
      </tr>
    <tr>
      <td>Status Pengiriman </td>
      <td>:</td>
      <td><label for="status_pengiriman"></label>
        <input type="text" name="status_pengiriman" id="status_pengiriman" /></td>
      </tr>
    <tr>
      <td>Tanggal Barang Dikirim </td>
      <td>:</td>
      <td><label for="tanggal_barang_dikirim"></label>
        <input type="text" name="tanggal_barang_dikirim2" id="tanggal_barang_dikirim" /></td>
      </tr>
    <tr>
      <td height="19" colspan="3"><div align="left"></div>
        <div align="center">
          <p>
            <input type="submit" name="simpan_data" id="simpan_data" value="SIMPAN DATA" />
            </p>
        </div></td>
      </tr>
  </table>
</div>
<p align="left">&nbsp;</p>
<p>&nbsp;</p></td>
    </tr>
  </table>
</form>
</body>
</html>