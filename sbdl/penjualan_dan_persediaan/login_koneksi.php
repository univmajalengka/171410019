<?php 
include 'connection.php';
$username = $_POST['ussername'];
$password = $_POST['password'];
 
 $query = "select * from table_user where ussername='$username' and password='$password'";
$login = mysqli_query($con,$query);
$cek = mysqli_num_rows($login);
 
if($cek > 0){
  session_start();
    $_SESSION['ussername'] = $username;
    $_SESSION['status'] = "login";
    echo '<script>
    	alert("login sukses");
    	document.location.href="admin/index.php";
    </script>';
    
  }else {
    echo '<script>
    	alert("login gagal");
    	document.location.href="index.php";
    </script>';
  }
?>
