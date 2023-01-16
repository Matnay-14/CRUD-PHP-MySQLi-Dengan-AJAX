<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nisn         = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];

$query = "INSERT INTO tbl_siswa (nisn, nama_lengkap, alamat) VALUES ('$nisn', '$nama_lengkap', '$alamat')";

if($connection->query($query)) {

    header("location: index.php");

} else {

    echo "Data Gagal Disimpan!";

}

?>