<?php
include 'koneksi.php';

$id_transaksi = $_POST['id_transaksi'];
$id_karyawan = $_POST['id_karyawan'];
$id_pengunjung = $_POST['id_pengunjung'];
$id_kamar = $_POST['id_kamar'];

mysqli_query($koneksi,"UPDATE transaksi SET id_transaksi='$id_transaksi', id_karyawan='$id_karyawan',
id_pengunjung='$id_pengunjung',id_kamar='$id_kamar' WHERE id_transaksi='$id_transaksi'");
header("location: transaksi.php"); 

?>