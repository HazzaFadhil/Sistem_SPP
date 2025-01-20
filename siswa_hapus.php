<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE nisn=$id");
if($query) {
    echo '<script>alert("Data Berhasil Dihapus."); location.href="index.php?page=siswa";</script>';
}else {
    echo '<script>alert("Data Gagal Dihapus."); location.href="index.php?page=siswa";</script>';
}
?>