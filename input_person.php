<?php
// koneksi ke database
$konek = mysqli_connect("localhost","root","","arsensus");

// ambil variabel yang dikirim dari form
$person_name   = $_GET['person_name'];
$region_id  = $_GET['region_id'];
$address  = $_GET['address'];
$income  = $_GET['income'];
$created_at  = $_GET['created_at'];

$masuk = "INSERT INTO person(person_name,region_id,address,income,created_at) VALUES('$person_name','$name','$address','$income','$created_at')";
$berhasil = mysqli_query($konek, $masuk);

// apabila query untuk menginput data benar
if ($berhasil){ 
	// lakukan redirect
	header("location:person.php");
}
else{
  echo "Input Data Persons failed";
}
?>
