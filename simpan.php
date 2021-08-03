<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $namasiswa = $_POST['namasiswa'];
    $kelas = $_POST['kelas'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
}
$sql = "INSERT INTO datasiswa(id,namasiswa,kelas,agama,alamat) VALUES('$id','$namasiswa','$kelas','$agama','$alamat')";
$query = mysqli_query($connect,$sql);
if ($query) {
    header("Location:tampildata.php");
}else {
    header("Location:simpan.php?status=gagal");
}
?>