<?php
require_once "mySQL_koneksi.php";

$id = $_GET['idTamu'];
$sql = "SELECT * FROM tb_tamu WHERE id_tamu='$id'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()){
    $nama = $row['nama_tamu'];
    $email = $row['email_tamu'];
    $pesan = $row['pesan_tamu'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>
<body>
    <div class="container p-3 mt-2">
        <div class="card">
            <div class="card-header">
                <h3>Form Edit Buku Tamu</h3>    
            </div>

            <div class="card-body">
                <form action="update_bk_tamu.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="id" class="form-control" readonly value="<?=$_GET['idTamu'];?>" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required value="<?=$nama;?>">
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Masukkan email" required value="<?=$email;?>">
                    </div>

                    <div class="form-group">
                        <textarea name="pesan" class="form-control" placeholder="Masukkan pesan" required><?php echo $pesan?></textarea>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success btn-block" type="submit" value="Update" class="form-control">
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <a href="hal_bk_tamu.php">
                    <i class="fa fa-arrow-left">Back</i>
                </a>
            </div>
        </div>
    </div>
</body>
</html>