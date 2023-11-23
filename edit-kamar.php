<h3>Edit_kamar</h3>

<?php
include 'koneksi.php';
$id_kamar= $_GET['id_kamar'];
$data = mysqli_query($koneksi,"SELECT * FROM kamar WHERE id_kamar='$id_kamar'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-kamar.php">
<table>
    <tr>
        <td>id_kamar</td>
        <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>jenis_kamar</td>
        <td><input type="text" name="jenis_kamar" value="<?php echo $tampil['jenis_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>nama</td>
        <td><input type="text" name="nama" value="<?php echo $tampil['nama']; ?>"></td>
    </tr>
    <tr>
        <td>harga</td>
        <td><input type="text" name="harga" value="<?php echo $tampil['harga']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>