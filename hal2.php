<?php
session_start();
$nama = $_SESSION['nama'];
$akses = $_SESSION ['akses'];
$iduser = $_SESSION["iduser"];
//print_t($_SESSION);
include 'header.php';
if ($akses=='admin') {
	echo "<font size='10'>halaman boleh diakses, hai $nama</font> <br>";

}else{
	header('location: form.html');
}
include 'footer.php';

?>