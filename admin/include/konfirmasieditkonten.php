<?php 
	if(isset($_SESSION['id_konten'])){
	  $id_konten = $_SESSION['id_konten'];
	  $isi = $_POST['isi'];
	  $judul = $_POST['judul'];
	 
	if(empty($judul)){
		header("Location:index.php?include=edit-konten&data=$id_kontennotif=editkosong
		&jenis=judul");
	}else if(empty($isi)){
		header("Location:index.php?include=edit-konten&data=$id_konten&notif=editkosong
		&jenis=isi");
	}else{
		$sql = "UPDATE `konten` SET `judul` = '$judul', `isi` = '$isi' WHERE `konten`.`id_konten` = $id_konten";
		mysqli_query($koneksi,$sql);
		header("Location:index.php?include=konten&notif=editberhasil");
	}
	}
?>