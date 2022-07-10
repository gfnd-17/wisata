<?php 
	include ("koneksi.php");

	$edt = $_POST['id'];

		$nama = $_POST['nama'];
		$isi = $_POST['isi'];

		$file = $_FILES['upload']['name'];
		$eks = explode('.', $file);
		$dok = $_FILES['upload']['tmp_name'];

		if ($file == NULL) {
			$data = "UPDATE artikel SET nama='$nama', keterangan='$isi' WHERE id='$edt'";
			$launch = mysqli_query($db, $data);

			if ($launch) {
				echo "<script>alert('Data berhasil di ubah !')</script>";
				echo "<script>location='../../artikel.php'</script>";
				
			} else{
				header('Location: ../../edt_artikel.php?id=$edt');
			}
		}
		else{
			move_uploaded_file($dok, '../../file/'.$file);
			

			$data = "UPDATE artikel SET nama='$nama', keterangan='$isi', gambar='$file' WHERE id='$edt'";
			$launch = mysqli_query($db, $data);

			if ($launch) {
				echo "<script>alert('Data berhasil di ubah !')</script>";
				echo "<script>location='../../artikel.php'</script>";
				
			} else{
				header('Location: ../../edt_artikel.php?id=$edt');
			}

		}
 ?>