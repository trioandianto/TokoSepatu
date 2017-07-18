<?php
include "koneksi.php";

 $kdkategori = $_GET[kode_kategori];
 $query = "delete from kategori where id_kategori='$kdkategori'";
 $actio = mysql_query($query);
 if ($actio){
	 echo "<script>alert('Data Berhasil Di Hapus')
	 location.replace('menu_kategori.php')</script>";
 }
 else {
	  echo "<script>alert('Data Gagal Di Hapus')
	 location.replace('menu_kategori.php')</script>";
}
	 	

?>