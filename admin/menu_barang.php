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
              <td><strong><font size="+2">DATA BARANG </strong></td>
              <td width="348"><div align="right"><a href="tambah_barang.php">Add data </a></div></td>
            </tr>
</table>
<p align="left">&nbsp;</p>
          <table width="1047" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td width="26">No</td>
              <td width="46"><div align="center">Kode</div></td>
              <td width="138"><div align="center">Nama Barang </div></td>
              <td width="102"><div align="center">Harga (Rp)</div></td>
              <td width="105"><div align="center">Berat Barang</div></td>
              <td width="75"><div align="center">Stok</div></td>
              <td width="157"><div align="center">Gambar </div></td>
              <td width="167"><div align="center">Kategori</div></td>
              <td colspan="2"><div align="center">Aksi</div></td>
            </tr>
            <tr>
              <?php 
			$conn = new mysqli("localhost", "root", "", "tokosepatu");
			 if ($conn->connect_errno) {
			 echo die("Failed to connect to MySQL: " . $conn->connect_error);
			 }
			$query=mysqli_query($conn, "select * from barang");
  
    $no= + 1;
    while($baris=mysqli_fetch_array($query)){
    
      $mod=$no % 2;
      

?>
    <tr bgcolor=<?php echo $color; ?>>
     <td><div align="center"><?php echo $no; ?></td>
     <td><div align="center"><?php echo $baris[0]; ?></td>
     <td><div align="center"><?php echo $baris[1]; ?></td>
     <td><div align="center"><?php echo $baris[2]; ?></td>
     <td><div align="center"><?php echo $baris[3]; ?></td>
     <td><div align="center"><?php echo $baris[4]; ?></td>
     <td><div align="center"><?php if($row['image_location'] != ""): ?>
	<img src="uploads/<?php echo $row['gambar']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
	<?php else: ?>
	<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
	<?php endif; ?></td>
     <td><div align="center"><?php echo $baris[6]; ?></td>
     <td width="194"><div align="center"><a href="edit_kategori.php?kode_barang=<? echo $baris[0];?>">Edit</a>
     </div></td>
    <td width="197"><div align="center"><a href="delete_kategori.php?kode_kategori=<? echo $baris[0];?>">Delete</a>
    </div></td>
    </tr>
 <?php $no++; ?>
     <?php } ?>
          </table>
</body>
</form>
</html>