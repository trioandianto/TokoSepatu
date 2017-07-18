<?php

$koneksi=mysql_connect("localhost","root","");
$database=mysql_select_db("tokosepatu",$koneksi);

$id=$_POST['id_kategori']; 
$nmtable="kategori";
$primary="id_kategori";
$sql="delete from $nmtable where $primary='$id_kategori'";
$query=mysql_query($sql);

if($query)
{
	echo"<script>location='menu_kategori.php'</script>";
}
else
{
	die("Query kamu salah dikarenakan: ".mysql_error());
}

?>
