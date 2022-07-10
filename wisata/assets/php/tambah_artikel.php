<?php 
	include("koneksi.php");
	if (isset($_POST['submit'])) {
		$nama = $_POST ['nama'];
		$isi = $_POST ['isi'];
		$file = $_FILES ['upload']['name'];
		$x = explode('.', '$file');
		$dok = $_FILES['upload']['tmp_name'];

		move_uploaded_file($dok, '../../file/'.$file);

		$data = "INSERT INTO artikel (nama, keterangan, gambar) VALUE ('$nama', '$isi', '$file')";
		$rocket = mysqli_query($db, $data);

		if($rocket){
			echo"<script>alert('Berhasil !')</script>";
			echo"<script>location='../../artikel.php'</script>";
		}else{
			echo"<script>alert('Gagal !')</script>";
			echo"<script>location='../../tmb_artikel.php'</script>";	
		}
	}

 ?>