<?php
include("../connection.php");
?>
<h3 align="center">Usser</h3>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <th>Id</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Hak Akses</th>
        <th>Aksi</th>
    </tr>
<?php
    
    $query=("SELECT * FROM table_user");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        
        <td><?php echo"$r[id_usser]";?></td>
        <td><?php echo"$r[password]";?></td>
        <td><?php echo"$r[ussername]";?></td>
        <td><?php echo"$r[hakakses]";?></td>
        <td><a href="detail_user.php?id_usser=<?php echo "$r[id_usser]";?>">Detail</a></td>

    </tr>
<?php 

} ?>
</table>
</div>