<?php
include "koneksi.php";

$id_karyawan = $_GET['id_karyawan'];
 
mysqli_query($koneksi,"DELETE FROM karyawan where id_karyawan='$id_karyawan'");
header("location:karyawan2.php");
?>