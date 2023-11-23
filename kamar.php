<html>
    <head>
        <link rel="stylesheet" href="styletable.css">
    </head>

<table class="data-table" border="1">
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
        <th>Id kamar</th>
        <th>Jenis kamar</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    <?php
        include "koneksi.php";
        $kamar=mysqli_query($koneksi,"SELECT * FROM kamar");  
        while($tampil=mysqli_fetch_array($kamar)){
            
    ?>
    <tr>
        <td> <?php echo $tampil['id_kamar'] ?></td>
        <td> <?php echo $tampil['jenis_kamar'] ?></td>
        <td> <?php echo $tampil['nama'] ?></td>
        <td> <?php echo $tampil['harga'] ?></td>
        <td> <a href="hapus-kamar.php?id_kamar=<?php echo $tampil ['id_kamar']; ?>"><button>hapus</button></a>
        <a href="edit-kamar.php?id_kamar=<?php echo $tampil ['id_kamar']; ?>"><button>edit</button></a></td>
    </tr>

    <?php
    }
    ?>

</table>
<a href="input-kamar.php"> <div style="text-align: center;"><button>Tambahkan Data Baru</button></div></a>


</html>