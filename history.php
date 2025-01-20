<h1 class="h3 mb-3">Data Pembayaran</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">  
								<div class="card-body">
                                    <?php 
                                    if(isset($_SESSION['user']['level'])){
                                    ?>
                                    <a href="?page=pembayaran" class="btn btn-primary">+ Tambah Data</a>
                                    <?php
                                    }
                                    ?>
                                    <a href="laporan.php" target="_blank" class="btn btn-success">Generate Laporan</a>
                                    <hr>
                                    <table class="table">
                                        <tr>
                                            <th>No</th>
                                            <th>Petugas</th>
                                            <th>NISN</th>
                                            <th>Nama Siswa</th>
                                            <th>Tanggal Bayar</th>
                                            <th>Bulan Bayar</th>
                                            <th>Tahun bayar</th>
                                            <th>SPP</th>
                                            <th>Jumlah bayar</th>

                                            <?php 
                                            if(isset($_SESSION['user']['level'])){
                                                $where = "";
                                            ?>
                                                <th>Aksi</th>
                                            <?php
                                            }else{
                                                $where = " WHERE pembayaran.nisn=" . $_SESSION['user']['nisn'];
                                            }
                                            ?>
                                        </tr>
                                        <?php
                                        $i = 1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM pembayaran LEFT JOIN petugas ON 
                                        petugas.id_petugas = pembayaran.id_petugas LEFT JOIN siswa on siswa.nisn = pembayaran.nisn 
                                        LEFT JOIN spp ON spp.id_spp = pembayaran.id_spp $where");
                                        while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $data['nama_petugas']; ?></td>
                                                <td><?php echo $data['nisn']; ?></td>
                                                <td><?php echo $data['nama']; ?></td>
                                                <td><?php echo $data['tgl_bayar']; ?></td>
                                                <td><?php echo $data['bulan_bayar']; ?></td>
                                                <td><?php echo $data['tahun_bayar']; ?></td>
                                                <td><?php echo number_format($data['nominal']); ?></td>
                                                <td><?php echo number_format($data['jumlah_bayar']); ?></td>

                                                
                                                <?php 
                                                    if(isset($_SESSION['user']['level'])){
                                                ?>
                                                <td>
                                                    <a href="?page=pembayaran_hapus&id=<?php echo $data['id_pembayaran']; ?>" class="btn btn-danger">hapus</a>
                                                </td>
                                                <?php 
                                                }
                                                ?>
                                            </tr>
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                    </table>
                                </div>
							</div>
						</div>
					</div>