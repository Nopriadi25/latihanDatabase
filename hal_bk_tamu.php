<?php
require_once "mySQL_koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <title></title>
</head>
<body>
    <div class="container p-3 mt-2">
        <div class="card">
            <div class="card-header">
                <h3>Form Input Buku Tamu</h3>    
            </div>

            <div class="card-body">
                <form action="insert_bk_tamu.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
                    </div>

                    <div class="form-group">
                        <textarea name="pesan" class="form-control" placeholder="Masukkan pesan" required></textarea>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success btn-block" type="submit" value="Kirim" class="form-control">
                    </div>
                </form>

                

                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr align="center">
                            <th>No</th><th>ID</th><th>Nama</th><th>Email</th><th>Pesan/Komentar</th><th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                     <?php
                        $sql = "SELECT * FROM tb_tamu ORDER BY id_tamu DESC";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0);
                            $no = 1;
                        while ($row = $result->fetch_assoc()){ ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$row['id_tamu'];?></td>
                                <td><?=$row['nama_tamu'];?></td>
                                <td><?=$row['email_tamu'];?></td>
                                <td><?=$row['pesan_tamu'];?></td>
                                <td align="center">
                                    <a href="proses_del_bk_tamu.php?idTamu=<?=$row['id_tamu'];?>" title="delete" class="btn btn-warning btn-sm" onclick="return confirm('apakah anda yakin?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
    
                                    <a href="hal_edit_bk_tamu.php?idTamu=<?=$row['id_tamu'];?>" title="edit" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                    <?php
                            $no++;
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
                pageLength: 5,
            });
        });
    </script>
</body>
</html>