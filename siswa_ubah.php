<?php
$id = $_GET['id'];
if(isset($_POST['nama'])){

    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "UPDATE siswa SET nisn='$nisn', nis='$nis',nama='$nama', 
    id_kelas='$id_kelas', alamat='$alamat', no_telp='$no_telp' WHERE nisn=$id"); 

    if(isset($_POST['password'])) {

    $query = mysqli_query($koneksi, "UPDATE siswa SET password='$password' WHERE nisn=$id"); 
}

    if($query) {
        echo '<script>alert("Ubah Data Berhasil")</script>';
    }else{
        echo '<script>alert("Ubah Data Gagal")</script>';
    }
}
$query  = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn=$id");
$data = mysqli_fetch_array($query);
?>

<h1 class="h3 mb-3">Tambah Data Siswa</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=siswa" class="btn btn-primary">Kembali</a>
                <hr>
                <form method="post">
                    <table class="table">
                        <tr>
                            <td width="200">NISN</td>
                            <td width="1">:</td>
                            <td><input class="form-control" value="<?php echo $data['nisn']; ?>" type="number" name="nisn" required></td>
                        </tr>
                        <tr>
                            <td width="200">NIS</td>
                            <td width="1">:</td>
                            <td><input class="form-control" value="<?php echo $data['nis']; ?>" type="number" name="nis" required></td>
                        </tr>
                        <tr>
                            <td width="200">Nama Siswa</td>
                            <td width="1">:</td>
                            <td><input class="form-control" value="<?php echo $data['nama']; ?>" type="text" name="nama" required></td>
                        </tr>
                        <tr>
                            <td width="200">Kelas</td>
                            <td width="1">:</td>
                            <td>
                                <select class="form-select" name="id_kelas" required>
                                    <option>Pilih kelas</option>
                                    <?php
                                        $kel = mysqli_query($koneksi, "SELECT * FROM kelas");
                                        while ($kelas = mysqli_fetch_array($kel)) {
                                    ?>
                                    <option <?php if($data['id_kelas'] == $kelas['id_kelas']) echo 'selected' ; ?> value="<?php echo $kelas['id_kelas']; ?>"><?php echo $kelas['nama_kelas']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">Alamat</td>
                            <td width="1">:</td>
                            <td><input class="form-control" value="<?php echo $data['alamat']; ?>" type="text" name="alamat" required></td>
                        </tr>
                        <tr>
                            <td width="200">No. Telepon</td>
                            <td width="1">:</td>
                            <td><input class="form-control" value="<?php echo $data['no_telp']; ?>" type="number" name="no_telp" required></td>
                        </tr>
                        <tr>
                            <td width="200">Password</td>
                            <td width="1">:</td>
                            <td>
                                <input class="form-control" type="password" name="password" required>
                                *) jika password tidak diganti, maka kosongkan saja.
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button class="btn btn-success" type="submit">Simpan</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>