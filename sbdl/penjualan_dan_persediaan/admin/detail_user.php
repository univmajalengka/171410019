<?php
include'../connection.php';
?>
<h3 align="center">Usser</h3>
<div class="table-responsive">
<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>NO.</th>
        <th>Id</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Hak Akses</th>         
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM table_user WHERE id_usser='$_GET[id_usser]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_usser]";?></td>
        <td><?php echo"$r[password]";?></td>
        <td><?php echo"$r[ussername]";?></td>
        <td><?php echo"$r[hakakses]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
<a href="index.php">Home</a>
</div>