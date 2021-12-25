<?php 
include "koneksi.php";

if (isset($_POST['kirim'])) {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$no_hp = $_POST['no_hp'];
	$email = $_POST['email'];
	$angkatan = $_POST['angkatan'];

	$simpan = "INSERT INTO pendaftaran(nama,alamat,tempat_lahir,tanggal_lahir,jenis_kelamin,no_hp,email,angkatan)VALUES ('$nama','$alamat','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$no_hp','$email','$angkatan')";

	$result = mysqli_query($conn,$simpan);

	if ($result) {
		echo "<script>alert('Data Telah Berhasil Di Simpan');window.location='index.php'</script>"
		;
	}
}

 ?>