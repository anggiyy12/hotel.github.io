<?php
include 'koneksi.php';

$id_karyawan = $_POST['id_karyawan'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$gaji = $_POST['gaji'];

mysqli_query($koneksi,"UPDATE karyawan SET id_karyawan='$id_karyawan', nama='$nama', jabatan='$jabatan', gaji='$gaji' WHERE id_karyawan='$id_karyawan'");
header("location: karyawan2.php"); 

?>