<?php
include("../connection.php");
?>
<h3 align="center">Penjualan</h3>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <th>No Faktur</th>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Jumlah Harga</th>
        <th>Jumlah Item</th>
        <th>Jumlah Kembali</th>
        <th>Karyawan</th> 
        <th>Aksi</th>
    </tr>
<?php
    
    $query=("SELECT * FROM table_penjualan");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        
        <td><?php echo"$r[faktur]";?></td>
        <td><?php echo"$r[tanggal]";?></td>
        <td><?php echo"$r[jam]";?></td>
        <td><?php echo"$r[jumlah_harga]";?></td>
        <td><?php echo"$r[jumlah_item]";?></td>
        <td><?php echo"$r[jumlah_kembali]";?></td>
        <td><?php echo"$r[kode_karyawan]";?></td>
        <td><a href="detail_penjualan.php?kode_karyawan=<?php echo "$r[kode_karyawan]";?>">Detail</a></td>

    </tr>
<?php 

} ?>
</table>
</div>