<?php
$koneksi=mysql_connect("localhost","root","");

$database=mysql_select_db("tokosepatu",$koneksi);
$idkategori=$_POST['idkategori'];
$namakategori=$_POST['namakategori'];

$update=mysql_query("update pengguna set namakategori='$namakategori' where idkategori='$idkategori'");

if ($update)
{
	 echo " <script>alert('Data Berhasil Di update')</script>";
	 include "menu_kategori.php";
}
else
     echo "<script>alert('Data Gagal Di update')</script>";
?>