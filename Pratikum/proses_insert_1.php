<?php
    if(isset($_POST['Submit'])){
        $tanggal = $_POST['tanggal'];
        $jenis_pendaftaran = $_POST['jenis_pendaftaran'];
        $tanggal_masuk_sekolah  = $_POST['tanggal_masuk_sekolah'];
        $nis = $_POST['nis'];
        $nomor_peserta_ujian  = $_POST['nomor_peserta_ujian'];
        $paud  = $_POST['paud'];
        $tk  = $_POST['tk'];
        $no_skhun  = $_POST['no_skhun'];
        $no_ijazah  = $_POST['no_ijazah'];
        $hobi  = $_POST['hobi'];
        $cita2  = $_POST['cita2'];
		
		// koneksi ke file database
		include_once("koneksi.php");
				
		// Masukkan data ke tabel database
		mysqli_query($mysqli, "INSERT INTO form_registrasi (tanggal,jenis_pendaftaran,tanggal_masuk_sekolah,nis,nomor_peserta_ujian,
        paud,tk,no_skhun,no_ijazah,hobi,cita2) VALUES('$tanggal',
        '$jenis_pendaftaran',
        '$tanggal_masuk_sekolah',
        '$nis',
        '$nomor_peserta_ujian',
        '$paud',
        '$tk',
        '$no_skhun',
        '$no_ijazah',
        '$hobi', 
        '$cita2')");
        header("location:formulir-pesertadidik-1.php");
    }
?>