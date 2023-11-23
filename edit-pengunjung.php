<h3>Edit_pengunjung</h3>

<?php
include 'koneksi.php';
$id_pengunjung= $_GET['id_pengunjung'];
$data = mysqli_query($koneksi,"SELECT * FROM pengunjung WHERE id_pengunjung='$id_pengunjung'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-pengunjung.php">
<table>
    <tr>
        <td>id_pengunjung</td>
        <td><input type="number" name="id_pengunjung" value="<?php echo $tampil['id_pengunjung']; ?>"></td>
    </tr>
    <tr>
        <td>nama_pengunjung</td>
        <td><input type="text" name="nama_pengunjung" value="<?php echo $tampil['nama_pengunjung']; ?>"></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"></td>
    </tr>
    <tr>
        <td>telphone</td>
        <td><input type="text" name="telphone" value="<?php echo $tampil['telphone']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>