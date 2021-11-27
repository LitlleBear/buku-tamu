<?php
include "koneksi.php";

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Tamu Pelayanan.xls");

if (isset($_GET['tanggal'])) {
    $tgl = $_GET['tanggal'];
    $data = mysqli_query($koneksi,"SELECT * FROM tb_tamu1 WHERE tanggal = '$tgl' ");
}else{
    $tgl = date("Y-m-d");
    $data = mysqli_query($koneksi,"SELECT * FROM tb_tamu1");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Tamu Pelayanan</title>
</head>
<body>
    <table border="1">
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
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>