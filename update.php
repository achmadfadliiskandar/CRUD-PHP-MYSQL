<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $namasiswa = $_POST['namasiswa'];
    $kelas = $_POST['kelas'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
}
$sql = "UPDATE datasiswa SET namasiswa='$namasiswa', kelas='$kelas', agama='$agama', alamat='$alamat' WHERE id='$id'";
$query = mysqli_query($connect,$sql);
if ($query) {
    header("Location:tampildata.php");
}else {
    header("Location:update.php?status=gagal");
}
?>