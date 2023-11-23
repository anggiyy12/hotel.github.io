<h3>Edit_transaksi</h3>

<?php
include 'koneksi.php';
$id_pengunjung= $_GET['id_transaksi'];
$data = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-transaksi.php">
<table>
    <tr>
        <td>id_transaksi</td>
        <td><input type="number" name="id_transaksi" value="<?php echo $tampil['id_transaksi']; ?>"></td>
    </tr>
    <tr>
        <td>id_karyawan</td>
        <td><input type="text" name="id_karyawan" value="<?php echo $tampil['id_karyawan']; ?>"></td>
    </tr>
    <tr>
        <td>id_pengunjung</td>
        <td><input type="text" name="id_pengunjung" value="<?php echo $tampil['id_pengunjung']; ?>"></td>
    </tr>
    <tr>
        <td>id_kamar</td>
        <td><input type="text" name="id_kamar<" value="<?php echo $tampil['id_kamar<']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>