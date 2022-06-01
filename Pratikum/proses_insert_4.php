<?php
    if(isset($_POST['Submit_4'])){
        $nama_ibu = $_POST['nama_ibu'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $pendidikan  = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $penghasilan  = $_POST['penghasilan'];
        $kebutuhan_khusus  = $_POST['kebutuhan_khusus'];
		
		// koneksi ke file database
		include_once("koneksi.php");
				
		// Masukkan data ke tabel database
		mysqli_query($mysqli, "INSERT INTO data_ibu (nama_ibu,tanggal_lahir,pendidikan,pekerjaan,penghasilan,
        kebutuhan_khusus) VALUES('$nama_ibu',
        '$tanggal_lahir', '$pendidikan', '$pekerjaan', '$penghasilan','$kebutuhan_khusus')");
        header("location:thankyou.php");
    }
?>