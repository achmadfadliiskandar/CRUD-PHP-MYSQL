<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM datasiswa  WHERE id = '$id'";
$query = mysqli_query($connect,$sql);
$sis = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) < 1) {
die("data tidak di temukan");
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Tambah Data</title>
</head>
<body>
    <div class="container">
    <h1>Form Tambah Data</h1>
    <form action="update.php" method="POST">
    <div class="mb-3">
    <label for="id" class="form-label d-none">Id</label>
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $sis['id'] ?>">
    </div>
    <div class="mb-3">
    <label for="namasiswa" class="form-label">Nama Siswa</label>
    <input type="text" class="form-control" id="namasiswa" name="namasiswa" value="<?php echo $sis['namasiswa'] ?>">
    </div>
    <div class="mb-3">
    <label for="kelas" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas"  value="<?php echo $sis['kelas'] ?>">
    </div>
    <div class="mb-3">
    <label for="agama" class="form-label">Agama</label>
    <input type="text" class="form-control" id="agama" name="agama"  value="<?php echo $sis['agama'] ?>">
    </div>
    <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat"  value="<?php echo $sis['alamat'] ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
    </form>
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