<h3>Edit_karyawan</h3>

<?php
include 'koneksi.php';
$id_karyawan= $_GET['id_karyawan'];
$data = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-karyawan.php">
<table>
    <tr>
        <td>id_karyawan</td>
        <td><input type="number" name="id_karyawan" value="<?php echo $tampil['id_karyawan']; ?>"></td>
    </tr>
    <tr>
        <td>nama</td>
        <td><input type="text" name="nama" value="<?php echo $tampil['nama']; ?>"></td>
    </tr>
    <tr>
        <td>jabatan</td>
        <td><input type="text" name="jabatan" value="<?php echo $tampil['jabatan']; ?>"></td>
    </tr>
    <tr>
        <td>gaji</td>
        <td><input type="text" name="gaji" value="<?php echo $tampil['gaji']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>