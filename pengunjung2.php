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
        <th>Id pengunjung</th>
        <th>Nama pengunjung</th>
        <th>Alamat</th>
        <th>Telphone</th>
        <th>Aksi</th>
    </tr>

    <?php
        include "koneksi.php";
        $pengunjung=mysqli_query($koneksi,"SELECT * FROM pengunjung");  
        while($tampil=mysqli_fetch_array($pengunjung)){
            
    ?>
    <tr>
        <td> <?php echo $tampil['id_pengunjung'] ?></td>
        <td> <?php echo $tampil['nama_pengunjung'] ?></td>
        <td> <?php echo $tampil['alamat'] ?></td>
        <td> <?php echo $tampil['telphone'] ?></td>
        <td> <a href="hapus-pengunjung.php?id_pengunjung=<?php echo $tampil ['id_pengunjung']; ?>"<button>hapus</button></a>
        <a href="edit-pengunjung.php?id_pengunjung=<?php echo $tampil ['id_pengunjung']; ?>"<button>edit</button></a></td>
    </tr>

    <?php
    }
    ?>

</table>

<a href="input-pengunjung.php"> <div style="text-align: center;"><button>Tambahkan Data Baru</button></div></a>

</html>