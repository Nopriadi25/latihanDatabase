<?php
require_once "mySQL_koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

//perintah sql
$sql = "INSERT INTO tb_tamu VALUES('', '$nama', '$email', '$pesan')";

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
