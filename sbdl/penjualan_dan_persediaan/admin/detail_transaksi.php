<?php
include'../connection.php';
?>
<h3 align="center">Detail Transaksi</h3>
<div class="table-responsive">
<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>NO.</th>
        <th>No Urut</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>         
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM table_transaksi WHERE kode='$_GET[kode]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[no]";?></td>
        <td><?php echo"$r[kode]";?></td>
        <td><?php echo"$r[nama]";?></td>
        <td><?php echo"$r[harga]";?></td>
        <td><?php echo"$r[jumlah]";?></td>
        <td><?php echo"$r[total]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
<a href="index.php">Home</a>
</div>