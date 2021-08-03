<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    header("Location:tampildata.php");
}

$id = $_GET['id'];

$sql = "DELETE FROM datasiswa WHERE id='$id'";
$query = mysqli_query($connect,$sql);
if ($query) {
    header("Location:tampildata.php");
}else {
    header("Location:hapus.php?status=gagal");
}
?>