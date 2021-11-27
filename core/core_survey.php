<?php  
include "koneksi.php";

$survey = mysqli_query($koneksi,"SELECT * FROM tb_survey");
$jumlah = mysqli_num_rows($survey);

#hitung kepuasan
$survey1 = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE kepuasan = 'Sangat Puas' ");
$sp = mysqli_num_rows($survey1);

$survey2 = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE kepuasan = 'Puas' ");
$p = mysqli_num_rows($survey2);

$survey3 = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE kepuasan = 'Kurang Puas' ");
$kp = mysqli_num_rows($survey3);

$survey4 = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE kepuasan = 'Tidak Puas' ");
$tp = mysqli_num_rows($survey4);

#hitung setiap meja
$survey_meja1 = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 1' ");
$meja1 = mysqli_num_rows($survey_meja1);

$survey_meja2 = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 2' ");
$meja2 = mysqli_num_rows($survey_meja2);

$survey_meja3 = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 3' ");
$meja3 = mysqli_num_rows($survey_meja3);

$survey_meja4 = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 4' ");
$meja4 = mysqli_num_rows($survey_meja4);

#hitung kepuasan Meja 1
$meja1sp = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 1' AND kepuasan = 'Sangat Puas' ");
$sp1 = mysqli_num_rows($meja1sp);

$meja1p = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 1' AND kepuasan = 'Puas' ");
$p1 = mysqli_num_rows($meja1p);

$meja1kp = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 1' AND kepuasan = 'Kurang Puas' ");
$kp1 = mysqli_num_rows($meja1kp);

$meja1tp = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 1' AND kepuasan = 'Tidak Puas' ");
$tp1 = mysqli_num_rows($meja1tp);

#hitung kepuasan Meja 2
$meja2sp = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 2' AND kepuasan = 'Sangat Puas' ");
$sp2 = mysqli_num_rows($meja2sp);

$meja2p = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 2' AND kepuasan = 'Puas' ");
$p2 = mysqli_num_rows($meja2p);

$meja2kp = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 2' AND kepuasan = 'Kurang Puas' ");
$kp2 = mysqli_num_rows($meja2kp);

$meja2tp = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 2' AND kepuasan = 'Tidak Puas' ");
$tp2 = mysqli_num_rows($meja2tp);

#hitung kepuasan Meja 3
$meja3sp = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 3' AND kepuasan = 'Sangat Puas' ");
$sp3 = mysqli_num_rows($meja3sp);

$meja3p = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 3' AND kepuasan = 'Puas' ");
$p3 = mysqli_num_rows($meja3p);

$meja3kp = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 3' AND kepuasan = 'Kurang Puas' ");
$kp3 = mysqli_num_rows($meja3kp);

$meja3tp = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 3' AND kepuasan = 'Tidak Puas' ");
$tp3 = mysqli_num_rows($meja3tp);

$meja4sp = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 4' AND kepuasan = 'Sangat Puas' ");
$sp4 = mysqli_num_rows($meja4sp);

$meja4p = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 4' AND kepuasan = 'Puas' ");
$p4 = mysqli_num_rows($meja4p);

$meja4kp = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 4' AND kepuasan = 'Kurang Puas' ");
$kp4 = mysqli_num_rows($meja4kp);

$meja4tp = mysqli_query($koneksi,"SELECT * FROM tb_survey WHERE meja = 'Meja 4' AND kepuasan = 'Tidak Puas' ");
$tp4 = mysqli_num_rows($meja4tp);

?>