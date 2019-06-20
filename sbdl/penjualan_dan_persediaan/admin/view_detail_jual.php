<?php
include("../connection.php");
?>
<h3 align="center">Detail Jual</h3>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <th>No</th>
        <th>No Faktur</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th>Aksi</th>
    </tr>
<?php
    $no = 1;
    $query=("SELECT * FROM view_detail_jual");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no";?></td>
        <td><?php echo"$r[faktur]";?></td>
        <td><?php echo"$r[nama_barang]";?></td>
        <td><?php echo"$r[harga_barang]";?></td>
        <td><a href="detail_detail_jual.php?faktur=<?php echo "$r[faktur]";?>">Detatil</a></td>
        <?php $no++ ?>

    </tr>
<?php 

} ?>
</table>
</div>