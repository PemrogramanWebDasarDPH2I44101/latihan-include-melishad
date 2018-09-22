<?php
session_start();
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$akses = $_POST['akses'];
	$iduser = "";
	$_SESSION ['nama'] = $nama;
	$_SESSION ['akses'] = $akses;
	$_SESSION ['iduser'] = $iduser;
	
}
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="hal2.php">Pergi ke halaman 2 </a> <br>
<a href="hal3.php">Pergi ke halaman 3 </a>
</body>
</html>
<?php 
include 'footer.php';
 ?>
