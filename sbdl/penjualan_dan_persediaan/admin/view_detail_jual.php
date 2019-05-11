<?php
include("../connection.php");
?>
<h3 align="center">Detail Jual</h3>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <th>No Faktur</th>
        <th>Kode Barang</th>
        <th>Jumlah Jual</th>
        <th>Aksi</th>
    </tr>
<?php
    
    $query=("SELECT * FROM table_detail_jual");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        
        <td><?php echo"$r[faktur]";?></td>
        <td><?php echo"$r[kode_barang]";?></td>
        <td><?php echo"$r[jumlah_jual]";?></td>
        <td><a href="detail_detail_jual.php?kode_barang=<?php echo "$r[kode_barang]";?>">Detatil</a></td>

    </tr>
<?php 

} ?>
</table>
</div>