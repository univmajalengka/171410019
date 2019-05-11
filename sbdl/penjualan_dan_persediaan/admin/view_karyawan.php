<?php
include("../connection.php");
?>
<h3 align="center">Detail Karyawan</h3>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <th>Kode Karyawan</th>
        <th>Nama</th>
        <th>Password</th>
        <th>Aksi</th>
    </tr>
<?php
    
    $query=("SELECT * FROM table_karyawan");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        
        <td><?php echo"$r[kode_karyawan]";?></td>
        <td><?php echo"$r[nama_karyawan]";?></td>
        <td><?php echo"$r[password_karyawan]";?></td>
        <td><a href="detail_karyawan.php?kode_karyawan=<?php echo "$r[kode_karyawan]";?>">Detail</a></td>

    </tr>
<?php 

} ?>
</table>
</div>