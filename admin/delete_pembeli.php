<?php
include "koneksi.php";

 $kodePembeli = $_GET[kode_pembeli];
 $query = "delete from pembeli where id_pembeli='$kodePembeli'";
 $actio = mysql_query($query);
 if ($actio){
	 echo "<script>alert('Data Berhasil Di Hapus')
	 location.replace('menu_pembeli.php')</script>";
 }
 else {
	  echo "<script>alert('Data Gagal Di Hapus')
	 location.replace('menu_pembeli.php')</script>";
}
	 	

?>