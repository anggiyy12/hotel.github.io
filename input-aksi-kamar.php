<?php
include "koneksi.php";


$id_kamar = $_POST['id_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];

mysqli_query($koneksi,"INSERT INTO kamar VALUES('$id_kamar','$jenis_kamar','$nama','$harga')");
header("location:kamar.php");
?>