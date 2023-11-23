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
        <th>Id transaksi</th>
        <th>Id karyawan</th>
        <th>Id pengunjung</th>
        <th>Id kamar</th>
        <th>Aksi</th>
    </tr>

    <?php
        include "koneksi.php";
        $transaksi=mysqli_query($koneksi,"SELECT * FROM transaksi");  
        while($tampil=mysqli_fetch_array($transaksi)){
            
    ?>
    <tr>
        <td> <?php echo $tampil['id_transaksi'] ?></td>
        <td> <?php echo $tampil['id_karyawan'] ?></td>
        <td> <?php echo $tampil['id_pengunjung'] ?></td>
        <td> <?php echo $tampil['id_kamar'] ?></td>
        <td> <a href="hapus-transaksi.php?id_transaksi=<?php echo $tampil ['id_transaksi']; ?>">Hapus</a>
        <a href="edit-transaksi.php?id_transaksi=<?php echo $tampil ['id_transaksi']; ?>">Edit</a></td>
    </tr>

    <?php
    }
    ?>

</table>

<a href="input-transaksi.php"> <div style="text-align: center;"><button>Tambahkan Data Baru</button></div></a>
</html>