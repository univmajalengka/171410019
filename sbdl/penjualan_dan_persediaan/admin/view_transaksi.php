<?php
include("../connection.php");
?>
<h3 align="center">Detail Transaksi</h3>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM view_transaksi");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no";?></td>
        <td><?php echo"$r[no]";?></td>
        <td><?php echo"$r[nama_barang]";?></td>
        <td><?php echo"$r[harga_barang]";?></td>
        <td><?php echo"$r[jumlah_barang]";?></td>
        <td><a href="detail_transaksi.php?no=<?php echo "$r[no]";?>">Detail</a></td>
        <?php $no++ ?>

    </tr>
<?php 

} ?>
</table>
</div>