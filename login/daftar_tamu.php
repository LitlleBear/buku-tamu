<!-- tamu non pelayanan -->
<?php
include "../core/koneksi.php";
include "header.php";

if (isset($_GET['tgl'])) {
$tanggal = $_GET['tgl'];
$data = mysqli_query($koneksi,"SELECT * FROM tb_tamu WHERE tgl = '$tanggal' ");
}else{
$tanggal = date("Y-m-d");
$data = mysqli_query($koneksi,"SELECT * FROM tb_tamu WHERE tgl = '$tanggal' ");
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
                    <b class="panel-title"><i class="lnr lnr-users"></i> Daftar Tamu Non Pelayanan</b>
                </div>
                    <div class="panel-body" style="overflow-x: auto;">
                        <!-- export tamu -->
                        Pilih Tanggal Untuk Export Data Tamu Non Pelayanan
                        <form method="GET" action="../core/export_tamu.php">
                            <input  type="date" name="tgl" id="">
                            <button class="btn btn-success" type="submit">Export Data</button>
                        </form>
                        <br>
                        <!-- tambah tamu -->
                        <p align="right">
                        <a href="tambah_tamu.php" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"> Tambah Tamu</i></a>
                        </p>
                        <!-- filter berdasarkan tanggal -->
                        <p>Pilih Tanggal Untuk Menampilkan</p>
                        <form method="GET">
                            <input  type="date" name="tgl" id="">
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
                                	<th>Nama Lembaga / Pribadi</th>
                                    <th>Pejabat Yang Ditemui</th>
                                	<th>Kepentingan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php   while($tamu = mysqli_fetch_array($data)){ ?>

                                <tr>
									<td><?= $tamu['tgl']; ?></td>
                                    <td><?= $tamu['jam']; ?></td>
									<td><?= $tamu['nama']; ?></td>
                                    <td><?= $tamu['nik']; ?></td>
									<td><?= $tamu['kontak']; ?></td>
									<td><?= $tamu['instansi']; ?></td>
                                    <td><?= $tamu['pejabat']; ?></td>
									<td><?= $tamu['kepentingan']; ?></td>
									<td>
										<a href="edit_tamu.php?id=<?= $tamu['id']; ?>" class="btn btn-success btn-sm" ><i class="lnr lnr-pencil"></i> Edit</a>

										<a href="tamu_hapus.php?id=<?= $tamu['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data Tamu?')"><i class="fa fa-trash" aria-hidden="true"> Hapus</i></a>
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