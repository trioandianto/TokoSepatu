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
	 
	 $filename = basename($_FILES["image"]["name"]);
	 print_r($filename);
	 move_uploaded_file($filetmp, $filepath);
	 
	 $location=$_FILES["image"]["name"];
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
<table width="598" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="38" ><strong><font size="+2">TAMBAH DATA BARANG</strong>              <div align="right"></div></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <table width="571" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="151" height="33">Id Barang </td>
            <td width="9">:</td>
            <td width="362"><label for="id_barang"></label>
              <input type="text" name="id_barang" id="id_barang" /></td>
          </tr>
          <tr>
            <td height="32">Nama Barang</td>
            <td>:</td>
            <td><label for="nama_barang"></label>
              <input type="text" name="nama_barang" id="nama_barang" /></td>
          </tr>
          <tr>
            <td height="28" >Harga Barang (Rp)</td>
            <td>:</td>
            <td><label for="harga_barang"></label>
            <input type="text" name="harga_barang" id="harga_barang" /></td>
          </tr>
          <tr>
            <td height="28" >Berat Barang (Kg)</td>
            <td>:</td>
            <td><label for="berat_barang"></label>
            <input type="text" name="berat_barang" id="berat_barang" /></td>
          </tr>
          <tr>
            <td height="28">Stock</td>
            <td>:</td>
            <td><label for="stock"></label>
            <input type="text" name="stock" id="stock" /></td>
          </tr>
          <tr>
            <td height="28">Gambar </td>
            <td>:</td>
            <td><label for="imageUpload"></label>
            <input type="file" name="imageUpload" id="imageUpload"/></td>
          </tr>
          <tr>
            <td height="28">Deskripsi</td>
            <td>:</td>
            <td><label for="deskripsi"></label>
            <textarea name="deskripsi" id="deskripsi" cols="45" rows="5"></textarea></td>
          </tr>
          <tr>
            <td height="28">Kategori</td>
            <td>:</td>
            <td><label for="kategori"></label>
              <select name="kategori" size="1" id="kategori">
<option value="Sepatu Wanita ">Sepatu Wanita </option>
<option value="Sepatu Pria">Sepatu Pria</option>
            </select></td>
          </tr>
          <tr>
            <td height="28" colspan="3"><div align="center">
              <input type="submit" name="simpan" id="simpan" value="Simpan" />
            </div></td>
          </tr>
        </table>
        <p align="justify">&nbsp;</p></td>
    </tr>
  </table>
</body>
</form>
</html>  
  
  
