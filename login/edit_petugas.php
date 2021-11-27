<?php  
include "../core/koneksi.php";
include "header.php";
?>

<div class="main">
			<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
		<!-- OVERVIEW -->
            <div class="panel">
                <div class="panel-heading">
                    <b class="panel-title"><i class="lnr lnr-users"></i> Edit Data Petugas </b>
                </div>
                    <div class="panel-body">

                    <?php
						$id = $_GET['id'];
						$data = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$id' ");
						while ($petugas = mysqli_fetch_array($data)) {
					?>

                        <form action="petugas_update.php" method="POST" enctype="multipart/form-data">
                            <p>Nama</p>
                            <input required name="id" type="hidden" class="form-control" value="<?= $petugas['id']; ?>" >
							<input required name="nama" type="text" class="form-control" value="<?= $petugas['nama']; ?>" >
                            <p class="text-danger">*Biarkan Jika Tidak Di Ganti</p>
                            <br>
                            <p>Username</p>
                            <input disabled required name="username" type="text" class="form-control" value="<?= $petugas['username']; ?>" >
                            <br>
                            <p>Password</p>
                            <input required name="password" type="password" class="form-control" value="<?= $petugas['password']; ?>" >
                            <p class="text-danger">*Biarkan Jika Tidak Di Ganti</p>
                            <br>
                            <p>Meja Tempat Bertugas</p>
                            <input required name="penempatan" type="text" class="form-control" value="<?= $petugas['penempatan']; ?>" >
                            <p class="text-danger">*Biarkan Jika Tidak Di Ganti</p>
                            <br><br>
                            <button name="sbm" style="width: 150px" class="btn btn-success" type="submit">Update</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
		</div>
	</div>
			<!-- END MAIN CONTENT -->
</div>
<?php include_once "footer.php"; ?>