<?php
include'../connection.php';
?>
<h3 align="center">Detail Transaksi</h3>
<div class="table-responsive">
<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>NO.</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Ussername</th>
        <th>Faktur Penjualan</th>
        <th>Jumlah Item</th>
        <th>Kode Karyawan</th>
        <th>Jumlah Kembali</th>
        <th>Tanggal</th>         
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM view_transaksi WHERE no='$_GET[no]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo $no ;?></td>
        <td><?php echo"$r[no]";?></td>
        <td><?php echo"$r[nama_barang]";?></td>
        <td><?php echo"$r[harga_barang]";?></td>
        <td><?php echo"$r[jumlah_barang]";?></td>
        <td><?php echo"$r[ussername]";?></td>
        <td><?php echo"$r[faktur_penjualan]";?></td>
        <td><?php echo"$r[jumlah_item]";?></td>
        <td><?php echo"$r[kode_karyawan]";?></td>
        <td><?php echo"$r[jumlah_kembali]";?></td>
        <td><?php echo"$r[tanggal]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
<a href="index.php">Home</a>
</div>