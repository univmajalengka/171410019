<?php  
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "penjualan_dan_persediaan";

	$con = mysqli_connect($server, $username, $password, $database);

	if (! $con) {
		echo "Gagal Konek";
		mysqli_error();
	}
	else{
	}

?>
