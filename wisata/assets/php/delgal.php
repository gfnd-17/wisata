<?php 
	include ("koneksi.php");

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$delart = "DELETE FROM gambar WHERE id=$id";
		$rome = mysqli_query($db, $delart);

		if ($rome) {
			echo"<script>alert('Berhasil !')</script>";
			echo"<script>location='../../galeri.php'</script>";
		} else {
			die("Gagal Menghapus....");
		}
	}
 ?>