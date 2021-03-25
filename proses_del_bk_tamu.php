<?php
require_once "mySQL_koneksi.php";

$id = $_GET['idTamu'];

//perintah sql
$sql = "DELETE FROM tb_tamu WHERE id_tamu='$id'";

//eksekusi perintah
// ($conn->query($sql) -> ini adalah proses eksekusi
if ($conn->query($sql) === true){

    //cara pertama dengan header location
    // header("location:hal_bk_tamu.php");

    //cara kedua dengan javascript
    echo "<script> alert('Berhasil Terhapus');location.assign('hal_bk_tamu.php');
          </script>";
}else{
    echo "<script> alert('Gagal Terhapus');location.assign('hal_bk_tamu.php');
          </script>";
}

?>
