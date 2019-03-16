<?php
// koneksi ke database
$konek = mysqli_connect("localhost","root","","arsensus");

// ambil variabel yang dikirim dari form
$name   = $_GET['name'];
$created_at  = $_GET['created_at'];

$masuk = "INSERT INTO regions(name,created_at) VALUES('$name','$created_at')";
$berhasil = mysqli_query($konek, $masuk);

// apabila query untuk menginput data benar
if ($berhasil){ 
	// lakukan redirect
	header("location:region.php");
}
else{
  echo "Input Data Regions failed";
}
?>
