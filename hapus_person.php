<?php
$konek = mysqli_connect("localhost","root","","arsensus");

// ambil id dari hasil klik link Hapus
$id    = $_GET['id'];

$hapus = "DELETE FROM person WHERE id='$id'";
$hasil = mysqli_query($konek, $hapus);

// apabila query untuk menghapus data benar
if ($hasil){ 
  // lakukan redirect
  header("location:person.php");
}
else{
  echo "Hapus Data  Gagal";
}
?>
