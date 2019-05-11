<?php
include'../connection.php';
?>
<h3 align="center">Detail Jual</h3>
<div class="table-responsive">
<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>NO.</th>
        <th>No Faktur</th>
        <th>Kode Barang</th>
        <th>Jumlah Jual</th>         
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM table_detail_jual WHERE kode_barang='$_GET[kode_barang]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[faktur]";?></td>
        <td><?php echo"$r[kode_barang]";?></td>
        <td><?php echo"$r[jumlah_jual]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
<a href="index.php">Home</a>
</div>