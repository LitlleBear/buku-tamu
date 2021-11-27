<!-- TAMU PENERIMA LAYANAN -->
<?php
include "../core/koneksi.php";
include "header.php";

if (isset($_GET['tanggal'])) {
    $tgl = $_GET['tanggal'];
    $data = mysqli_query($koneksi,"SELECT * FROM tb_tamu1 WHERE tanggal = '$tgl' ");
}else{
    $tgl = date("Y-m-d");
    $data = mysqli_query($koneksi,"SELECT * FROM tb_tamu1 WHERE tanggal = '$tgl' ");
}
?>
		<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
            <div class="panel">
                <div class="panel-heading">
                    <b class="panel-title"><i class="lnr lnr-users"></i> Daftar Tamu Penerima Layanan</b>
                </div>
                    <div class="panel-body" style="overflow-x: auto;">
                        <!-- EXPORT -->
                        <form method="GET" action="../core/export_tamu1.php">
                            <input  type="date" name="tgl" id="">
                            <button class="btn btn-success" type="submit">Export Data</button>
                        </form>
                        <!-- TAMBAH -->
                        <p align="right">
                            <a class="btn btn-primary btn-md" href="tambah_tamu1.php"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Tamu</a>
                        </p> 
                        <!-- FILTER -->
                        <form method="GET">
                            <input  type="date" name="tanggal" id="">
                            <button class="btn btn-primary" type="submit">Tampilkan</button>
                        </form>
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                	<th>Tanggal</th>
                                    <th>Jam</th>
                                	<th>Nama</th>
                                    <th>NIK</th>
                                	<th>No HP</th>
                                    <th>E-Mail</th>
                                	<th>Instansi (Nama Lembaga / Pribadi)</th>
                                    <th>Meja Layanan</th>
                                	<th>Keperluan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($tamu = mysqli_fetch_array($data)){ ?>

                                <tr>
									<td><?= $tamu['tanggal']; ?></td>
                                    <td><?= $tamu['jam']; ?></td>
									<td><?= $tamu['nama']; ?></td>
                                    <td><?= $tamu['nik']; ?></td>
									<td><?= $tamu['kontak']; ?></td>
                                    <td><?= $tamu['email']; ?></td>
									<td><?= $tamu['instansi']; ?></td>
                                    <td><?= $tamu['meja']; ?></td>
									<td><?= $tamu['keperluan']; ?></td>
									<td>
										<a href="edit_tamu1.php?id=<?= $tamu['id']; ?>" class="btn btn-success btn-sm" ><i class="lnr lnr-pencil"></i> Edit</a>

										<a href="tamu_hapus1.php?id=<?= $tamu['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data Tamu?')"><i class="fa fa-trash" aria-hidden="true"> Hapus</i></a>
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