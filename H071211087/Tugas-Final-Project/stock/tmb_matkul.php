<?php 
include '../dbconnect.php';
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$ukuran=$_POST['ukuran'];
$merk=$_POST['merk'];
// $satuan=$_POST['satuan'];
$stock=$_POST['stock'];
// $lokasi=$_POST['lokasi'];

// $simpan = mysqli_query($koneksi, "INSERT INTO tmhs (nim, nama, alamat, prodi)
// VALUES ('$_POST[tnim]',
//         '$_POST[tnama]',
//         '$_POST[talamat]',
//         '$_POST[tprodi]') ");

$query = mysqli_query($conn,"INSERT INTO sstock_matkul (nama, jenis, ukuran, merk, stock) 
VALUES ('$_POST[nama]',
        '$_POST[jenis]',
        '$_POST[ukuran]',
        '$_POST[merk]',
        '$_POST[stock]') ");
// -- ('','$nama','$jenis','$merk','$ukuran','$stock')");
if ($query){

echo " <div class='alert alert-success'>
    <strong>Success!</strong> Redirecting you back in 1 seconds.
  </div>
<meta http-equiv='refresh' content='1; url= matkul.php'/>  ";
} else { echo "<div class='alert alert-warning'>
    <strong>Failed!</strong> Redirecting you back in 1 seconds.
  </div>
 <meta http-equiv='refresh' content='1; url= matkul.php'/> ";
}
 
?>
 
  <html>
<head>
  <title>Tambah Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>