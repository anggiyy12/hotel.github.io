<?php
include "koneksi.php";

$id_kamar = $_GET['id_kamar'];
 
mysqli_query($koneksi,"DELETE FROM kamar where id_kamar='$id_kamar'");
header("location:kamar.php");
?>