<?php
include 'koneksi.php';
error_reporting(0);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>DATA SISWA</title>
</head>
<body>
<div class="container">
<h1>Data Siswa</h1>
<a href="tambahdata.php" class="btn btn-primary my-3">Tambah Data</a>
<table class="table table-bordered">
<thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">Nama</th>
    <th scope="col">Kelas</th>
    <th scope="col">Agama</th>
    <th scope="col">Alamat</th>
    <th scope="col">Aksi</th>
    </tr>
</thead>
<tbody>
    <tr>
    <?php
    $no = 1;
    $sql = "SELECT * FROM datasiswa";
    $query = mysqli_query($connect,$sql);
    ?>
    <?php foreach ($query as $sis) {?>
    <tr>
    <td><?=$no++?></td>
    <td><?=$sis["namasiswa"]?></td>
    <td><?=$sis["kelas"]?></td>
    <td><?=$sis["agama"]?></td>
    <td><?=$sis["alamat"]?></td>
    <td>
        <a href="edit.php?id=<?php echo $sis['id'] ?>" class="btn btn-success">Edit</a>
        <a href="hapus.php?id=<?php echo $sis['id'] ?>" class="btn btn-danger">Hapus</a>
    </td>
    <?php }?>
    <?php if ($sis != TRUE) { ?>
    <td colspan="8" class="text-center">data kosong</td>
    <?php } ?>
    </tr>
</tbody>
</table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>