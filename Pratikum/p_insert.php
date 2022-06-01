<?php
    if(isset($_POST['Submit'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $web  = $_POST['web'];
        $pesan = $_POST['pesan'];
        $telp  = $_POST['telp'];
		
		// koneksi ke file database
		include_once("koneksi.php");
				
		// Masukkan data ke tabel database
		mysqli_query($mysqli, "INSERT INTO form_registrasi (nama,
        emai,
        web ,
        pesa,
        telp) VALUES('$nama',
                      '$emai',
                      '$web ',
                      '$pesa',
                      '$telp')");
        header("location:p.php");
    }
?>