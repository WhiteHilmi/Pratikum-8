<?php
    if(isset($_POST['Submit_2'])){
        $nama_lengkap = $_POST['nama_lengkap'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $nisn  = $_POST['nisn'];
        $nik = $_POST['nik'];
        $tempat_lahir  = $_POST['tempat_lahir'];
        $tanggal_lahir  = $_POST['tanggal_lahir'];
        $agama  = $_POST['agama'];
        $kebutuhan_khusus  = $_POST['kebutuhan_khusus'];
        $alamat_jalan  = $_POST['alamat_jalan'];
        $rt  = $_POST['rt'];
        $rw  = $_POST['rw'];
        $dusun  = $_POST['dusun'];
        $kelurahan_desa  = $_POST['kelurahan_desa'];
        $kecamatan  = $_POST['kecamatan'];
        $kode_pos  = $_POST['kode_pos'];
        $tempat_tinggal  = $_POST['tempat_tinggal'];
        $transportasi  = $_POST['transportasi'];
        $no_hp  = $_POST['no_hp'];
        $no_telp  = $_POST['no_telp'];
        $email  = $_POST['email'];
        $kps_pkh_kip  = $_POST['kps_pkh_kip'];
        $no_kps_pkh_kip  = $_POST['no_kps_pkh_kip'];
        $kewarganegaraan  = $_POST['kewarganegaraan'];
        $nama_negara  = $_POST['nama_negara'];
		
		// koneksi ke file database
		include_once("koneksi.php");
				
		// Masukkan data ke tabel database
		mysqli_query($mysqli, "INSERT INTO form_data_pribadi (nama_lengkap,jenis_kelamin,nisn,nik,tempat_lahir,
        tanggal_lahir,agama,kebutuhan_khusus,alamat_jalan,rt,rw,dusun,kelurahan_desa,kecamatan,kode_pos,tempat_tinggal,
        transportasi,no_hp,no_telp,email,kps_pkh_kip,no_kps_pkh_kip,kewarganegaraan,nama_negara) VALUES('$nama_lengkap',
        '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir','$tanggal_lahir', '$agama', '$kebutuhan_khusus',
        '$alamat_jalan','$rt',  '$rw',  '$dusun', '$kelurahan_desa', '$kecamatan',  '$kode_pos', '$tempat_tinggal',
        '$transportasi',
         '$no_hp', 
         '$no_telp', 
         '$email', 
         '$kps_pkh_kip', 
         '$no_kps_pkh_kip', 
         '$kewarganegaraan',
         '$nama_negara')");
        header("location:formulir-pesertadidik-3.php");
    }
?>