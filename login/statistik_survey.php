<?php include "../core/koneksi.php";
include "../core/core_survey.php";
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
                    <b class="panel-title"><i class="lnr lnr-chart-bars"></i> Data Survey Harian </b>
                </div>
                    <div class="panel-body" style="overflow-x: auto;">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th colspan="2">Data Survey Harian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background-color:#7FFFD4;">
                                    <td>Jumlah Survey Sampai Hari Ini</td>
                                    <td style="text-align:center"><?= $jumlah; ?></td>
                            </tbody>
                    </table>
                    	<!-- START Kepuasan -->
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                	<th colspan="2">Data Kepuasan Masyarakat</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr style="background-color:#7FFFD4;">
                            		<td>Kepuasan</td>
                            		<td style="text-align:center">Jumlah</td>
                            	</tr>
                                <tr>
                                	<td>Sangat Puas</td>
									<td style="text-align:center"><?= $sp; ?></td>
								<tr>
									<td>Puas</td>
									<td style="text-align:center"><?= $p; ?></td>
								</tr>
								<tr>
									<td>Kurang Puas</td>
									<td style="text-align:center"><?= $kp; ?></td>
								</tr>
								<tr>
									<td>Tidak Puas</td>
									<td style="text-align:center"><?= $tp; ?></td>
								</tr>
                            </tbody>
                    </table>
                    <!-- end Kepuasan -->

                    <!-- START Meja -->
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                	<th colspan="2">Jumlah Survey Setiap Meja</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr style="background-color:#7FFFD4;">
                            		<td>Meja Pelayanan</td>
                            		<td style="text-align:center">Jumlah</td>
                            	</tr>
                                <tr>
                                	<td>Meja 1</td>
									<td style="text-align:center"><?= $meja1; ?></td>
								<tr>
									<td>Meja 2</td>
									<td style="text-align:center"><?= $meja2; ?></td>
								</tr>
								<tr>
									<td>Meja 3</td>
									<td style="text-align:center"><?= $meja3; ?></td>
								</tr>
								<tr>
									<td>Meja 4</td>
									<td style="text-align:center"><?= $meja4; ?></td>
								</tr>
                            </tbody>
                    </table>
                    <!-- end Meja -->

                    <!-- START MEJA 1 -->
                    <br>

                    <table id="example" class="table table-striped" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                	<th colspan="2">Data Kepuasan Pelanggan Pada Meja 1</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr style="background-color:#7FFFD4;">
                            		<td>Kepuasan</td>
                            		<td style="text-align:center">Jumlah</td>
                            	</tr>
                                <tr>
                                	<td>Sangat Puas</td>
									<td style="text-align:center"><?= $sp1; ?></td>
								<tr>
									<td>Puas</td>
									<td style="text-align:center"><?= $p1; ?></td>
								</tr>
								<tr>
									<td>Kurang Puas</td>
									<td style="text-align:center"><?= $kp1; ?></td>
								</tr>
								<tr>
									<td>Tidak Puas</td>
									<td style="text-align:center"><?= $tp1; ?></td>
								</tr>
                            </tbody>
                    </table>
                    <!-- END MEJA 1 -->
                    <br>
                    <!-- START MEJA 2 -->
                    <table id="example" class="table table-striped" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                	<th colspan="2">Data Kepuasan Pelanggan Pada Meja 2</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr style="background-color:#7FFFD4;">
                            		<td>Kepuasan</td>
                            		<td style="text-align:center">Jumlah</td>
                            	</tr>
                                <tr>
                                	<tr>
                                	<td>Sangat Puas</td>
									<td style="text-align:center"><?= $sp2; ?></td>
								<tr>
									<td>Puas</td>
									<td style="text-align:center"><?= $p2; ?></td>
								</tr>
								<tr>
									<td>Kurang Puas</td>
									<td style="text-align:center"><?= $kp2; ?></td>
								</tr>
								<tr>
									<td>Tidak Puas</td>
									<td style="text-align:center"><?= $tp2; ?></td>
								</tr>
                            </tbody>
                    </table>
                    <!-- END MEJA 2 -->
                    <br>
                    <!-- START MEJA 3 -->
                    <table id="example" class="table table-striped" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                	<th colspan="2">Data Kepuasan Pelanggan Pada Meja 3</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr style="background-color:#7FFFD4;">
                            		<td>Kepuasan</td>
                            		<td style="text-align:center">Jumlah</td>
                            	</tr>
                                <tr>
                                	<tr>
                                	<td>Sangat Puas</td>
									<td style="text-align:center"><?= $sp3; ?></td>
								<tr>
									<td>Puas</td>
									<td style="text-align:center"><?= $p3; ?></td>
								</tr>
								<tr>
									<td>Kurang Puas</td>
									<td style="text-align:center"><?= $kp3; ?></td>
								</tr>
								<tr>
									<td>Tidak Puas</td>
									<td style="text-align:center"><?= $tp3; ?></td>
								</tr>
                            </tbody>
                    </table>
                    <!-- END MEJA 3 -->
                    <br>
                    <!-- START MEJA 4 -->
                    <table id="example" class="table table-striped" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                	<th colspan="2">Data Kepuasan Pelanggan Pada Meja 4</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr style="background-color:#7FFFD4;">
                            		<td>Kepuasan</td>
                            		<td style="text-align:center">Jumlah</td>
                            	</tr>
                                <tr>
                                	<tr>
                                	<td>Sangat Puas</td>
									<td style="text-align:center"><?= $sp4; ?></td>
								<tr>
									<td>Puas</td>
									<td style="text-align:center"><?= $p4; ?></td>
								</tr>
								<tr>
									<td>Kurang Puas</td>
									<td style="text-align:center"><?= $kp4; ?></td>
								</tr>
								<tr>
									<td>Tidak Puas</td>
									<td style="text-align:center"><?= $tp4; ?></td>
								</tr>
                            </tbody>
                    </table>
                    <!-- END MEJA 4 -->
           		 </div>
		</div>
	</div>
<!-- END MAIN CONTENT -->
</div>

<?php include "footer.php"; ?>



