 <?php
 //mengatasi error notice dan warning
 //error ini biasa muncul jika dijalankan di localhost, jika online tidak ada masalah
 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 
 if($_POST['submit']){
 //membuat variabel untuk menyimpan data inputan yang di isikan di form
 $password_lama = $_POST['password_lama'];
 $password_baru = $_POST['password_baru'];
 $konfirmasi_password = $_POST['konfirmasi_password'];
 
 //cek dahulu ke database dengan query SELECT
 //kondisi adalah WHERE (dimana) kolom password adalah $password_lama di encrypt m5
 //encrypt -> md5($password_lama)
 $password_lama =($password_lama);
 $cek = $koneksi->query("SELECT password FROM admin WHERE password='$password_lama'");
  if($cek->num_rows){
 //kondisi ini jika password lama yang dimasukkan sama dengan yang ada di database
 //membuat kondisi minimal password adalah 5 karakter
 if(strlen($password_baru) >= 5){
 //jika password baru sudah 5 atau lebih, maka lanjut ke bawah
 //membuat kondisi jika password baru harus sama dengan konfirmasi password
 if($password_baru == $konfirmasi_password){
 //jika semua kondisi sudah benar, maka melakukan update kedatabase
 //query UPDATE SET password = encrypt md5 password_baru
 //kondisi WHERE id user = session id pada saat login, maka yang di ubah hanya user dengan id tersebut
 $password_baru =($password_baru);
 $username = $_SESSION['username']; //ini dari session saat login
 
 $update = $koneksi->query("UPDATE admin SET password='$password_baru' WHERE id_user='$id_user'");
 if($update){
 //kondisi jika proses query UPDATE berhasil
 echo 'Password berhasil di rubah';
 }else{
 //kondisi jika proses query gagal
 echo 'Gagal merubah password';
  } 
 }else{
 //kondisi jika password baru beda dengan konfirmasi password
 echo 'Konfirmasi password tidak cocok';
 }
 }else{
 //kondisi jika password baru yang dimasukkan kurang dari 5 karakter
 echo 'Minimal password baru adalah 5 karakter';
 }
 }else{
 //kondisi jika password lama tidak cocok dengan data yang ada di database
 echo 'Password lama tidak cocok';
 }
 }
 ?>