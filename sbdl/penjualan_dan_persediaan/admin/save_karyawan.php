<?php 
 include '../connection.php';
  $kode_karyawan  = $_POST['kode_karyawan']; 
  $nama_karyawan  = $_POST['nama_karyawan'];
  $password_karyawan  = $_POST['password_karyawan'];
  $mysqli  = "INSERT INTO table_karyawan (kode_karyawan,nama_karyawan,password_karyawan) VALUES ('$kode_karyawan', '$nama_karyawan', '$password_karyawan')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {
    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_karyawan.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>