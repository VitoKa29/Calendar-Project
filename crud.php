<?php 

include 'proses.php';
$db = new database();

session_start();
 
$aksi = $_GET['aksi'];
if($aksi == "input"){
 	$db->input( $_SESSION["username"], $_POST['title'],$_POST['tanggal_mulai'],$_POST['tanggal_selesai'],$_POST['jam_mulai'],$_POST['jam_selesai'],$_FILES["upload"]["name"],$_POST['notes'],$_POST['priority'],$_POST['comment'] );
 	
}elseif($aksi == "registrasi"){
 	$db->registrasi($_POST['username'],hash('sha256', $_POST['password']),$_POST['nama'], $_POST['tanggal_lahir'], $_FILES["upload"]["name"]);
}elseif($aksi == "login"){
	$db->login($_POST['username'],hash('sha256', $_POST['password']));
}
elseif($aksi == "tambah_pemakaian_ruang"){
	$db->tambah_pemakaian_ruang($_POST['matkul'],$_POST['tahun'],$_POST['semester'],$_POST['grup'],$_POST['ruangan'],$_POST['sesi']);
}
elseif($aksi == "tambah_peminjaman_ruang"){
	$db->tambah_peminjaman_ruang($_POST['nim'],$_POST['ruangan'],$_POST['sesi'],$_POST['tanggal'],$_POST['keterangan']);
}
elseif($aksi == "hapus_event"){
	$db->hapus_event($_GET['id']);
}
elseif($aksi == "hapus_arsip"){
	$db->hapus_arsip($_GET['id']);
}
elseif($aksi == "arsip_event"){
	$db->arsip_event($_GET['id']);
}elseif($aksi == "update_event"){
 	$db->update_event( $_POST['id'], $_POST['title'],$_POST['tanggal_mulai'],$_POST['tanggal_selesai'],$_POST['jam_mulai'],$_POST['jam_selesai'],$_FILES["upload"]["name"],$_POST['notes'],$_POST['priority'],$_POST['comment'] );
 	
}elseif($aksi == "update_profile"){
 	$db->update_profile( $_POST['username'], $_POST['nama'],$_POST['tanggal_lahir'],$_FILES["upload"]["name"]);
 	
}
?>