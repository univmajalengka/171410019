<?php 
 include '../connection.php';
  $no  = $_POST['no']; 
  $kode  = $_POST['kode'];
  $nama  = $_POST['nama'];
  $harga  = $_POST['harga'];
  $jumlah  = $_POST['jumlah'];
  $total  = $_POST['total'];
  $mysqli  = "INSERT INTO table_transaksi (no,kode,nama,harga,jumlah,total) VALUES ('$no', '$kode', '$nama', '$harga', '$jumlah', '$total')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {
    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_transaksi.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>