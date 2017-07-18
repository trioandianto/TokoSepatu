<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$host="localhost";
$username="root";
$password="";
$database="tokosepatu";
$connect_db=mysql_connect($host,$username,$password) or die("Koneksi Gagal");
$find_db=mysql_select_db($database);
if ($find_db){ 
echo "Database Ada";
}
else { echo "Database Tidak Ada"; }
?>
</body>
</html>