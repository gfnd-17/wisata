<?php 
	include ("koneksi.php");

	$edt = $_POST['id'];

		$file = $_FILES['upload']['name'];
		$eks = explode('.', $file);
		$dok = $_FILES['upload']['tmp_name'];
		move_uploaded_file($dok, '../../file/'.$file);
			

			$data = "UPDATE gambar SET gambar='$file' WHERE id='$edt'";
			$launch = mysqli_query($db, $data);

			if ($launch) {
				echo "<script>alert('Data berhasil di ubah !')</script>";
				echo "<script>location='../../galeri.php'</script>";
				
			} else{
				header('Location: ../../edt_galeri.php?id=$edt');
			}
 ?>