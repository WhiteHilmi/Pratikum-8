<?php
    if(isset($_POST['Submit_3'])){
        $nama_ayah = $_POST['nama_ayah'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $pendidikan  = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $penghasilan  = $_POST['penghasilan'];
        $kebutuhan_khusus  = $_POST['kebutuhan_khusus'];
		
		// koneksi ke file database
		include_once("koneksi.php");
				
		// Masukkan data ke tabel database
		mysqli_query($mysqli, "INSERT INTO data_ayah (nama_ayah,tanggal_lahir,pendidikan,pekerjaan,penghasilan,
        kebutuhan_khusus) VALUES('$nama_ayah',
        '$tanggal_lahir', '$pendidikan', '$pekerjaan', '$penghasilan','$kebutuhan_khusus')");
        header("location:formulir-pesertadidik-4.php");
    }
?>