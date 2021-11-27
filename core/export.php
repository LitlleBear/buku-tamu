<?php
include "koneksi.php";

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Survey Harian.xls");
if (isset($_GET['tanggal'])) {
    $tgl1 = $_GET['tgl1'];
    $tgl2 = $_GET['tgl2'];
    $data = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE tanggal BETWEEN  '$tgl1' AND '$tgl2' ");
}else{
    $data = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE tanggal ");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Meja</th>
                <th>Kepuasan</th>
            </tr>
        </thead>
        <tbody>
            <?php
				while($survey = mysqli_fetch_array($data)){
            ?>
                <tr>
					<td><?= $survey['tanggal']; ?></td>
					<td><?= $survey['meja']; ?></td>
					<td><?= $survey['kepuasan']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>