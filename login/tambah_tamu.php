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
                                <b class="panel-title"><i class="lnr lnr-users"></i> Tambah Tamu Non-Pelayanan</b>
                            </div>
                            <div class="panel-body">
                                <form action="tamu_proses.php" method="POST" enctype="multipart/form-data">
                                    <p>Nama Lengkap</p>
                                    <input required name="nama" type="text" class="form-control">
                                    <br>
                                    <p>NIK</p>
                                    <input required name="nik" type="number" class="form-control">
                                    <br>
                                    <p>No HP</p>
                                    <input required name="kontak" type="number" class="form-control">
                                    <br>
                                    <p>Instansi (Nama Lembaga / Pribadi)</p>
                                    <input required name="instansi" type="text" class="form-control">
                                    <br>
                                    <p>Pilih Pejabat Yang Akan Ditemui</p>
                                    <select name="pejabat">
                                        <option required value="">Pejabat Yang Akan Ditemui </option>
                                        <option required value="Bertemu Ketua Pengadilan"> Bertemu Ketua Pengadilan</option>
                                        <option required value="Bertemu Wakil Ketua Pengadilan"> Bertemu Wakil Ketua Pengadilan</option>
                                        <option required value="Bertemu Panitera "> Bertemu Panitera</option>
                                        <option required value="Bertemu Sekretaris "> Bertemu Sekretaris</option>
                                        <option required value="Bertemu Hakim/Pejabat Lainnya "> Hakim/Pejabat Lainnya</option>                                  
                                    </select>
                                    <br> <br>
                                    <p>Kepentingan</p>
                                    <input required name="kepentingan" type="tex" class="form-control">
                                    <br><br>
                                    <button name="sbm" style="width: 150px" class="btn btn-success" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
<?php include_once "footer.php"; ?>