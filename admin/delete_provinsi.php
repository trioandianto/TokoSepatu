<?php
include "koneksi.php";

 $kodeProvinsi = $_GET[kode_provinsi];
 $query = "delete from provinsi where kode_provinsi='$kodeProvinsi'";
 $actio = mysql_query($query);
 if ($actio){
	 echo "<script>alert('Data Berhasil Di Hapus')
	 location.replace('menu_provinsi.php')</script>";
 }
 else {
	  echo "<script>alert('Data Gagal Di Hapus')
	 location.replace('menu_provinsi.php')</script>";
}
	 	

?>