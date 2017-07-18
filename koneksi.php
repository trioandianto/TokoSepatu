<?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'tokosepatu');
   $db = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
echo "koneksi sipp";
?>