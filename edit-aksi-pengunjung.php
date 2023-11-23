<?php
include 'koneksi.php';

$id_pengunjung = $_POST['id_pengunjung'];
$nama_pengunjung = $_POST['nama_pengunjung'];
$alamat = $_POST['alamat'];
$telphone = $_POST['telphone'];

mysqli_query($koneksi,"UPDATE pengunjung SET id_pengunjung='$id_pengunjung', nama_pengunjung='$nama_pengunjung',
alamat='$alamat',telphone='$telphone' WHERE id_pengunjung='$id_pengunjung'");
header("location: pengunjung.php"); 

?>