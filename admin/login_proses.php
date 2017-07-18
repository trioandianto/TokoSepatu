<?php
session_start();

// koneksi database -------------------------------------------->
$myDatabase = new mysqli ( "localhost" , "root" , "" );
echo $myDatabase->connect_error?'Koneksi gagal : '.$myDatabase->connect_error:'';
//<--------------------------------------------------------------
		  
if(isset($_POST['username']) && ($_POST['password'])){
 $username = $myDatabase->real_escape_string($_POST['username']);
 $password = $myDatabase->real_escape_string(md5($_POST['password']));
 $sql = "select * from user where username = '$username' AND password = '$password'";
 $result = $myDatabase->query($sql);

 if ($result->num_rows == 1){
  $row = $result->fetch_object();
  $_SESSION['username'] = $row->username;
  $_SESSION['level'] = $row->level;
   
 }else
 {
 $_SESSION['pesan']="Username atau Password salah";
 }
}
else{
 $_SESSION['pesan']="Username atau password tidak boleh kosong";
}
header("location:loginadmin.php");
?>
