<?php
include("../connection.php");
?>
<h3 align="center">Barang</h3>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th>Jumlah Barang</th>
        <th>Aksi</th>
    </tr>
<?php
    
    $query=("SELECT * FROM table_barang");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        
        <td><?php echo"$r[kode_barang]";?></td>
        <td><?php echo"$r[nama_barang]";?></td>
        <td><?php echo"$r[harga_barang]";?></td>
        <td><?php echo"$r[jumlah_barang]";?></td>
        <td><a href="detail_barang.php?kode_barang=<?php echo "$r[kode_barang]";?>">Detail</a></td>

    </tr>
<?php 

} ?>
</table>
</div>