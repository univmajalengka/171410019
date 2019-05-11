<?php 
 include '../connection.php';
  $id_usser  = $_POST['id_usser']; 
  $pwd  = $_POST['password'];
  $user  = $_POST['ussername'];
    $hak  = $_POST['hakakses'];
  $mysqli  = "INSERT INTO table_user (id_usser,password,ussername,hakakses) VALUES ('$id_usser', '$pwd', '$user', '$hak')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {
    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_user.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>