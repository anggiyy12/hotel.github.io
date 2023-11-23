<html>
    <head>
        <link rel="stylesheet" href="styletable.css">
    </head>
<table border="1">
<div class="main">
	<div class="navbar">
	<label class="ttl">Tabel Reservasi</label>
		<ul>
		    <li><a href="home.php">Home</a></li>
            <li><a href="kamar.php">Kamar</a></li>
			<li><a href="karyawan2.php">Karyawan</a></li>
			<li><a href="pengunjung2.php">Pengunjung</a></li>
			<li><a href="transaksi.php">Transaksi</a></li>
		</ul>
	</div>
    <tr>
        <th>Id karyawan</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Gaji</th>
        <th>Aksi</th>
    </tr>


    <?php
        include "koneksi.php";
        $karyawan=mysqli_query($koneksi,"SELECT * FROM karyawan");  
        while($tampil=mysqli_fetch_array($karyawan)){
            
    ?>
    <tr>
        <td> <?php echo $tampil['id_karyawan'] ?></td>
        <td> <?php echo $tampil['nama'] ?></td>
        <td> <?php echo $tampil['jabatan'] ?></td>
        <td> <?php echo $tampil['gaji'] ?></td>
        <td> <a href="hapus-karyawan.php?id_karyawan=<?php echo $tampil ['id_karyawan']; ?>"<button>hapus</button></a>
        <a href="edit-karyawan.php?id_karyawan=<?php echo $tampil ['id_karyawan']; ?>"<button>edit</button></a></td>
    </tr>

    <?php
    }
    ?>

</table>
<a href="input-karyawan.php"> <div style="text-align: center;"><button>Tambahkan Data Baru</button></div></a>

</html>