<?php
include 'koneksi.php';

$id_kamar = $_POST['id_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];

mysqli_query($koneksi,"UPDATE kamar SET id_kamar='$id_kamar', jenis_kamar='$jenis_kamar',
nama='$nama',harga='$harga' WHERE id_kamar='$id_kamar'");
header("location: kamar.php"); 

?>