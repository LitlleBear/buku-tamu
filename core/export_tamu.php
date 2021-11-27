<?php
include "koneksi.php";

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Tamu Non Pelayanan.xls");
if (isset($_GET['tgl'])) {
    $tgl = $_GET['tgl'];
    $data = mysqli_query($koneksi,"SELECT * FROM tb_tamu WHERE tgl = '$tgl' ");
}else{
    $data = mysqli_query($koneksi,"SELECT * FROM tb_tamu");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Tamu Non Pelayanan</title>
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
                <th>Instansi (Nama Lembaga / Pribadi)</th>
                <th>Pejabat Yang Ditemui</th>
                <th>Kepentingan</th>
            </tr>
        </thead>
        <tbody>
            <?php while($tamu = mysqli_fetch_array($data)){ ?>
                <tr>
					<td><?= $tamu['tgl']; ?></td>
                    <td><?= $tamu['jam']; ?></td>
					<td><?= $tamu['nama']; ?></td>
                    <td><?= $tamu['nik']; ?></td>
					<td><?= $tamu['kontak']; ?></td>
					<td><?= $tamu['instansi']; ?></td>
                    <td><?= $tamu['pejabat']; ?></td>
					<td><?= $tamu['kepentingan']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>