<?php
include "koneksi.php";

$id_transaksi = $_GET['id_transaksi'];
 
mysqli_query($koneksi,"DELETE FROM transaksi where id_transaksi='$id_transaksi'");
header("location:transaksi.php");
?>