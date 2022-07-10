<?php 
	include("koneksi.php");
	if (isset($_POST['submit'])) {
		$file = $_FILES ['upload']['name'];
		$x = explode('.', '$file');
		$dok = $_FILES['upload']['tmp_name'];

		move_uploaded_file($dok, '../../file/'.$file);

		$data = "INSERT INTO gambar (gambar) VALUE ('$file')";
		$rocket = mysqli_query($db, $data);

		if($rocket){
			echo"<script>alert('Berhasil !')</script>";
			echo"<script>location='../../galeri.php'</script>";
		}else{
			echo"<script>alert('Gagal !')</script>";
			echo"<script>location='../../tmb_galeri.php'</script>";	
		}
	}

 ?>