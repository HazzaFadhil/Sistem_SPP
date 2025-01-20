<h1 class="h3 mb-3">DashBoard</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Selamat datang di Aplikasi Pembayaran SPP</h5>
								</div>
								<div class="card-body">
                                    <table class="table">
                                        <?php 
                                        if(isset($_SESSION['user']['level'])){
                                        ?>
                                        <tr>
                                            <td width="200">Nama User</td>
                                            <td width="1">:</td>
                                            <td><?php echo $_SESSION['user']['nama_petugas']; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="200">Level User</td>
                                            <td width="1">:</td>
                                            <td><?php echo $_SESSION['user']['level']; ?></td>
                                        </tr>
                                        <?php
                                    }else{
                                        ?>

                                        <tr>
                                            <td width="200">Nama User</td>
                                            <td width="1">:</td>
                                            <td><?php echo $_SESSION['user']['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="200">Level User</td>
                                            <td width="1">:</td>
                                            <td>Siswa</td>
                                        </tr>

                                        <?php
                                        }
                                        ?>

                                        <tr>
                                            <td width="200">Tanggal Login</td>
                                            <td width="1">:</td>
                                            <td><?php echo date('d-m-Y H:i:s'); ?></td>
                                        </tr>
                                    </table>
                                </div>
							</div>
						</div>
					</div>