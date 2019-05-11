<?php
include'../connection.php';
?>
<h3 align="center">Detail Penjualan</h3>
<div class="table-responsive">
<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>NO.</th>
        <th>No Faktur</th>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Jumlah Harga</th>
        <th>Jumlah Item</th>
        <th>Jumlah Kembali</th>
        <th>Karyawan</th>         
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM table_penjualan WHERE kode_karyawan='$_GET[kode_karyawan]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[faktur]";?></td>
        <td><?php echo"$r[tanggal]";?></td>
        <td><?php echo"$r[jam]";?></td>
        <td><?php echo"$r[jumlah_harga]";?></td>
        <td><?php echo"$r[jumlah_item]";?></td>
        <td><?php echo"$r[jumlah_kembali]";?></td>
        <td><?php echo"$r[kode_karyawan]";?></td>    
    </tr>
<?php 
$no++;
} ?>
</table>
<a href="index.php">Home</a>
</div>