<?php
include "koneksi.php";
$id_pengaduan = $_POST['id_pengaduan'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pengaduan = $_POST['pengaduan'];
if (empty($nama)){
	echo "<script>alert('Harap isi terlebih Dahulu Nama Untuk Pengaduan')</script>";
	echo "<meta http-equiv='refresh' content='1 url=pengaduan.php'>";
}else if (empty($alamat )){
	echo "<script>alert('Harap isi terlebih Dahulu Alamat Untuk Pengaduan')</script>";
	echo "<meta http-equiv='refresh' content='1 url=pengaduan.php'>";
}else if (empty($pengaduan )){
	echo "<script>alert('Harap isi terlebih Dahulu Untuk Pengaduan')</script>";
	echo "<meta http-equiv='refresh' content='1 url=pengaduan.php'>";
}
else{


	$q1="INSERT INTO pengaduan values ('$id_pengaduan','$nama','$alamat','$pengaduan')";
	$tambah = mysqli_query($koneksi,$q1);

	if ($tambah){
		echo "<script>alert('Terimakasih Telah Memberikan Pengaduan')</script>";
		echo "<meta http-equiv='refresh' content='1 url=pengaduan.php'>";
	}else{
		echo "<script>alert('Terimakasih Telah Memberikan Pengaduan')</script>";
		echo "<meta http-equiv='refresh' content='1 url=pengaduan.php'>";
	}
}
?>