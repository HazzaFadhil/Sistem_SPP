<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM pembayaran WHERE id_pembayaran=$id");
if($query) {
    echo '<script>alert("Entri Pembayaran Berhasil Dihapus."); location.href="index.php?page=history";</script>';
}else {
    echo '<script>alert("Entri Pembayaran Gagal Dihapus."); location.href="index.php?page=pembayaran";</script>';
}
?>