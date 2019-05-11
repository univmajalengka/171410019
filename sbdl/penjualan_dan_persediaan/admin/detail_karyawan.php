<?php
include'../connection.php';
?>
<h3 align="center">Detail Karyawan</h3>
<div class="table-responsive">
<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>NO.</th>
        <th>Kode Karyawan</th>
        <th>Nama Karyawan</th>
        <th>Password</th>         
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM table_karyawan WHERE kode_karyawan='$_GET[kode_karyawan]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[kode_karyawan]";?></td>
        <td><?php echo"$r[nama_karyawan]";?></td>
        <td><?php echo"$r[password_karyawan]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
<a href="index.php">Home</a>
</div>