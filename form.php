<!DOCTYPE html>
<html>
<head>
	<title>LATIHAN HEADER FOOTER</title>
</head>
<body>
<?php
include 'header.php';
?>
<form action="hal1.php" method="POST">

	nama <input type="text" name="nama"><br>
	akses <input type="text" name="akses"><br> <br> <br>
	<input type="submit" name="submit" value="kirim "><br>
</form>
</body>
</html>
<?php 
include 'footer.php';
 ?>