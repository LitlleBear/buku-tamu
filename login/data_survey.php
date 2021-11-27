<?php 
include "../core/koneksi.php";
include "header.php";

if (isset($_GET['tanggal'])) {
    $tgl1 = $_GET['tgl1'];
    $tgl2 = $_GET['tgl2'];
    $data = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE tanggal BETWEEN  '$tgl1' AND '$tgl2' ");

}elseif ($_GET['tanggal']) {
    $date = $_GET['tanggal'];
    $data = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE tanggal = '$date' ");

}else{
    $tgl = date("Y-m-d");
    $data = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE tanggal = '$tgl' ");

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
                    <b class="panel-title"><i class="lnr lnr-chart-bars"></i> Data Survey Harian </b>
                </div>
                    <div class="panel-body" style="overflow-x: auto;">
                        Pilih tanggal untuk Export data survey
                        <form method="GET" action="../core/export.php">
                            <label>Tanggal Awal: </label>
                            <input  type="date" name="tgl1" id="tgl1">
                            <label>Tanggal Akhir: </label>
                            <input  type="date" name="tgl2" id="tgl2">
                            <input type="hidden" name="tanggal">
                            <button class="btn btn-success" type="submit">Export Data Survey</button>
                        </form>
                        <hr>
                        <form method="GET" action="">
                            <label>Tanggal Awal: </label>
                            <input  type="date" name="tgl1" id="tgl1">
                            <label>Tanggal Akhir: </label>
                            <input  type="date" name="tgl2" id="tgl2">
                            <input type="hidden" name="tanggal">
                            <button class="btn btn-primary" type="submit">Tampilkan</button>
                        </form>
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                	<th>Tanggal</th>
                                	<th>Meja</th>
                                	<th>Kepuasan</th>
                                    <th>Saran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($survey = mysqli_fetch_array($data)){ ?>
                                <tr>
									<td><?= $survey['tanggal']; ?></td>
									<td><?= $survey['meja']; ?></td>
									<td><?= $survey['kepuasan']; ?></td>
									<td><?= $survey['saran']; ?></td>
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

<?php include "footer.php"; ?>