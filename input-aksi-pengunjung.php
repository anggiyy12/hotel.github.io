<?php
include "koneksi.php";

$id_pengunjung = $_GET['id_pengunjung'];
 
mysqli_query($koneksi,"DELETE FROM pengunjung where id_pengunjung='$id_pengunjung'");
header("location:pengunjung.php");
?>