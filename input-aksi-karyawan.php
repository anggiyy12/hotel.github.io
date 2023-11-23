<?php
include "koneksi.php";

$ID  = $_POST['id_karyawan'];
$NAMA = $_POST['nama'];
$JABATAN = $_POST['jabatan'];
$GAJI = $_POST['gaji'];

mysqli_query($koneksi,"INSERT INTO karyawan VALUES('$ID','$NAMA','$JABATAN','$GAJI')");
header("location:karyawan2.php");
?>




