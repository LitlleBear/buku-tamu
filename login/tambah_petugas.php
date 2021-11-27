<?php  include "header.php"; 
date_default_timezone_set('Asia/Jakarta');
$date = new DateTime('now');

?>
		
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
                    <div class="panel">
                            <div class="panel-heading">
                                <b class="panel-title"><i class="lnr lnr-users"></i> Tambah Petugas </b>
                            </div>
                            <div class="panel-body">
                                <form action="petugas_proses.php" method="POST" enctype="multipart/form-data">
                                    <p>Nama Petugas</p>
                                    <input required name="nama" type="text" class="form-control">
                                    <br>
                                    <p>Username</p>
                                    <input required name="username" type="text" class="form-control">
                                    <br>
                                    <p>Password</p>
                                    <input required name="password" type="password" class="form-control">
                                    <br>
                                    <p>Pilih Meja Tugas</p>
                                    <input type="radio"  name="penempatan" id="" value="Meja Perdata"> Meja Perdata <br>
                                    <input type="radio"  name="penempatan" id="" value="Meja Pidana"> Meja Pidana <br>
                                    <input type="radio"  name="penempatan" id="" value="Meja Hukum"> Meja Hukum <br>
                                    <input type="radio"  name="penempatan" id="" value="Meja Umum dan Keuangan"> Meja Umum dan Keuangan <br>
                                    <input type="radio"  name="penempatan" id="" value="Tim Survey"> Tim Survey
                                    <br>
                                    <input required name="level" type="hidden" id="" value="user">
                                    <br>
                                    <button name="sbm" style="width: 150px" class="btn btn-success" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
<?php include_once "footer.php"; ?>