<?php
include("../connection.php");
?>
<h3 align="center">Detail Transaksi</h3>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <th>No Urut</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Aksi</th>
    </tr>
<?php
    
    $query=("SELECT * FROM table_transaksi");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        
        <td><?php echo"$r[no]";?></td>
        <td><?php echo"$r[kode]";?></td>
        <td><?php echo"$r[nama]";?></td>
        <td><?php echo"$r[harga]";?></td>
        <td><?php echo"$r[jumlah]";?></td>
        <td><?php echo"$r[total]";?></td>
        <td><a href="detail_transaksi.php?kode=<?php echo "$r[kode]";?>">Detail</a></td>

    </tr>
<?php 

} ?>
</table>
</div>