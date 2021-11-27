<?php
include "../core/koneksi.php";
include "header.php"; 
?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
            <div class="panel">
                <div class="panel-heading">
                    <b class="panel-title"><i class="lnr lnr-users"></i> Daftar Petugas Penerima Tamu </b>
                </div>
                    <div class="panel-body" style="overflow-x: auto;">
                        <table id="example" class="table table-striped table-hover table-active" style="width:100%">
                            <thead>
                                <tr>
                                	<th>Nama</th>
                                	<th>Penempatan</th>
                                	<th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                	$data = mysqli_query($koneksi,"SELECT * FROM user");
									while($petugas = mysqli_fetch_array($data)){
                                ?>
                                <tr>
									<td><?= $petugas['nama']; ?></td>
									<td><?= $petugas['penempatan']; ?></td>
									<td>
										<a href="edit_petugas.php?id=<?= $petugas['id']; ?>" class="btn btn-info btn-sm" ><i class="lnr lnr-pencil"></i> Edit</a>

										<a href="hapus_petugas.php?id=<?= $petugas['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data Petugas?')"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
									</td>
								</tr>
								<?php 
									}
								?>
                            </tbody>
                        </table>
            </div>
		</div>
	</div>
			<!-- END MAIN CONTENT -->
</div>

<?php include_once "footer.php"; ?>