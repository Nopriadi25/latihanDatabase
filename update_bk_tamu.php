<?php
require_once "mySQL_koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

//perintah sql
$sql = "UPDATE tb_tamu SET nama_tamu='$nama', email_tamu='$email', pesan_tamu='$pesan' WHERE id_tamu='$id'";

//eksekusi perintah
// ($conn->query($sql) -> ini adalah proses eksekusi
if ($conn->query($sql) === true){

    //cara pertama dengan header location
    // header("location:hal_bk_tamu.php");

    //cara kedua dengan javascript
    echo "<script> alert('Berhasil Tersimpan');location.assign('hal_bk_tamu.php');
          </script>";
}else{
    echo "<script> alert('Gagal Tersimpan');location.assign('hal_bk_tamu.php');
          </script>";
}

?>
