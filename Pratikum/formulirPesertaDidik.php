<?php
// input ke database
  require_once "koneksi.php";
    if (isset($_POST['Submit'])) {

    // definisi variabel dan set dengan nilai kosong
    $error = "";
    $error_tanggal = "";
    $error_jenis_pendataran = "";
    $error_tanggal_masuk_sekolah = "";
    $error_nis = "";
    $error_no_peserta_ujian = "";
    $error_paud = "";
    $error_tk = "";
    $error_no_skhun = "";
    $error_no_ijazah = "";
    $error_hobi = "";
    $error_cita2 = "";
    $error_nama = "";
    $error_jenis_kelamin = "";
    $error_nisn = "";
    $error_nik = "";
    $error_tempat_lahir = "";
    $error_tanggal_lahir = "";
    $error_agama = "";
    $error_kebutuhan_khusus = "";
    $error_jalan = "";
    $error_rt = "";
    $error_rw = "";
    $error_dusun = "";
    $error_desa = "";
    $error_kecamatan = "";
    $error_kode_pos = "";
    $error_tempat_tinggal = "";
    $error_transportasi = "";
    $error_no_hp = "";
    $error_no_telp = "";
    $error_email = "";
    $error_kps_pkh_kip = "";
    $error_no_kps_pkh_kip = "";
    $error_kewarganegaraan = "";
    $error_negara = "";
    $error_nama_ayah = "";
    $error_tanggal_lahir_ayah = "";
    $error_pendidikan_ayah = "";
    $error_pekerjaam_ayah = "";
    $error_penghasilan_ayah = "";
    $error_kebutuhan_khusus_ayah = "";
    $error_nama_ibu = "";
    $error_tanggal_lahir_ibu = "";
    $error_pendidikan_ibu = "";
    $error_pekerjaan_ibu = "";
    $error_penghasilan_ibu = "";

        $tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
        $jenis_pendataran = mysqli_real_escape_string($conn, $_POST['jenis_pendataran']);
        $tanggal_masuk_sekolah = mysqli_real_escape_string($conn, $_POST['tanggal_masuk_sekolah']);
        $nis = mysqli_real_escape_string($conn, $_POST['nis']);
        $no_peserta_ujian = mysqli_real_escape_string($conn, $_POST['no_peserta_ujian']); 
        $paud = mysqli_real_escape_string($conn, $_POST['paud']); 
        $tk = mysqli_real_escape_string($conn, $_POST['tk']); 
        $no_skhun = mysqli_real_escape_string($conn, $_POST['no_skhun']); 
        $no_ijazah = mysqli_real_escape_string($conn, $_POST['no_ijazah']); 
        $hobi = mysqli_real_escape_string($conn, $_POST['hobi']); 
        $cita2 = mysqli_real_escape_string($conn, $_POST['cita2']); 
        $nama = mysqli_real_escape_string($conn, $_POST['nama']); 
        $jenis_kelamin = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']); 
        $nisn = mysqli_real_escape_string($conn, $_POST['nisn']); 
        $nik = mysqli_real_escape_string($conn, $_POST['nik']); 
        $tempat_lahir = mysqli_real_escape_string($conn, $_POST['tempat_lahir']); 
        $tanggal_lahir = mysqli_real_escape_string($conn, $_POST['tanggal_lahir']); 
        $agama = mysqli_real_escape_string($conn, $_POST['agama']); 
        $kebutuhan_khusus = mysqli_real_escape_string($conn, $_POST['kebutuhan_khusus']); 
        $jalan = mysqli_real_escape_string($conn, $_POST['jalan']); 
        $rt = mysqli_real_escape_string($conn, $_POST['rt']); 
        $rw = mysqli_real_escape_string($conn, $_POST['rw']); 
        $dusun = mysqli_real_escape_string($conn, $_POST['dusun']); 
        $desa = mysqli_real_escape_string($conn, $_POST['desa']); 
        $kecamatan = mysqli_real_escape_string($conn, $_POST['kecamatan']); 
        $kode_pos = mysqli_real_escape_string($conn, $_POST['kode_pos']); 
        $tempat_tinggal = mysqli_real_escape_string($conn, $_POST['tempat_tinggal']); 
        $transportasi = mysqli_real_escape_string($conn, $_POST['transportasi']); 
        $no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']); 
        $no_telp = mysqli_real_escape_string($conn, $_POST['no_telp']); 
        $email = mysqli_real_escape_string($conn, $_POST['email']); 
        $kps_pkh_kip = mysqli_real_escape_string($conn, $_POST['kps_pkh_kip']); 
        $no_kps_pkh_kip = mysqli_real_escape_string($conn, $_POST['no_kps_pkh_kip']); 
        $kewarganegaraan = mysqli_real_escape_string($conn, $_POST['kewarganegaraan']); 
        $negara = mysqli_real_escape_string($conn, $_POST['negara']); 
        $nama_ayah = mysqli_real_escape_string($conn, $_POST['nama_ayah']); 
        $tanggal_lahir_ayah = mysqli_real_escape_string($conn, $_POST['tanggal_lahir_ayah']); 
        $pendidikan_ayah = mysqli_real_escape_string($conn, $_POST['pendidikan_ayah']); 
        $pekerjaam_ayah = mysqli_real_escape_string($conn, $_POST['pekerjaam_ayah']); 
        $penghasilan_ayah = mysqli_real_escape_string($conn, $_POST['penghasilan_ayah']); 
        $kebutuhan_khusus_ayah = mysqli_real_escape_string($conn, $_POST['kebutuhan_khusus_ayah']); 
        $nama_ibu = mysqli_real_escape_string($conn, $_POST['nama_ibu']); 
        $tanggal_lahir_ibu = mysqli_real_escape_string($conn, $_POST['tanggal_lahir_ibu']); 
        $pendidikan_ibu = mysqli_real_escape_string($conn, $_POST['pendidikan_ibu']); 
        $pekerjaan_ibu = mysqli_real_escape_string($conn, $_POST['pekerjaan_ibu']); 
        $penghasilan_ibu = mysqli_real_escape_string($conn, $_POST['penghasilan_ibu']); 
        $kebutuhan_khusus_ibu = mysqli_real_escape_string($conn, $_POST['kebutuhan_khusus_ibu']); 

        // validasi tanggal
        if(empty($_POST["tanggal"])){
            $error_tanggal = "Tanggal tidak boleh kosong";
        }else{
            $tanggal = cek_input($_POST["tanggal"]);
            if(!is_numeric($tanggal)){
                $error_tanggal = "Tanggal telephon hanya boleh angka";
            }
        }
            // validasi jenis pendaftaran
        if(empty($_POST["jenis_pendataran"])){
            $error_jenis_pendataran = "jenis pendaftaran tidak boleh kosong";
        }else{
            $jenis_pendataran = cek_input($_POST["jenis_pendataran"]);
        }
        // validasi tanggal masuk sekolah
        if(empty($_POST["tanggal_masuk_sekolah"])){
            $error_tanggal_masuk_sekolah = "tanggal masuk sekolah tidak boleh kosong";
        }else{
            $tanggal_masuk_sekolah = cek_input($_POST["tanggal_masuk_sekolah"]);
            if(!is_numeric($tanggal_masuk_sekolah)){
                $error_tanggal_masuk_sekolah = "tanggal masuk sekolah telephon hanya boleh angka";
            }
        }
            // validasi nis
        if(empty($_POST["nis"])){
            $error_nis = "Telephon tidak boleh kosong";
        }else{
            $nis = cek_input($_POST["nis"]);
            if(!is_numeric($nis)){
                $error_nis = "nis hanya boleh angka";
            }
        }
            // validasi nomor peserta ujian
        if(empty($_POST["no_peserta_ujian"])){
            $error_no_peserta_ujian = "no peserta ujian tidak boleh kosong";
        }else{
            $no_peserta_ujian = cek_input($_POST["no peserta ujian"]);
        }
            // validasi masuk paud
        if(empty($_POST["paud"])){
            $error_paud = "option tidak boleh kosong";
        }else{
            $paud = cek_input($_POST["no peserta ujian"]);
        }
            // validasi masuk tk
        if(empty($_POST["tk"])){
            $error_tk = "option tidak boleh kosong";
        }else{
            $tk = cek_input($_POST["no peserta ujian"]);
        }

        if (!$error) {
            if(mysqli_query($conn, "INSERT INTO tbl_formulirpendaftaran (tanggal, jenis_pendataran, tanggal_masuk_sekolah,
            nis,no_peserta_ujian,paud,tk,no_skhun,no_ijazah,hobi,cita2,nama,jenis_kelamin,nisn,nik,tempat_lahir,tanggal_lahir,
            agama,kebutuhan_khusus,jalan,rt,rw,dusun,desa,kecamatan,kode_pos,tempat_tinggal,transportasi,no_hp,no_telp,
            email,kps_pkh_kip,no_kps_pkh_kip,kewarganegaraan,negara,nama_ayah,tanggal_lahir_ayah,pendidikan_ayah,
            pekerjaam_ayah,penghasilan_ayah,kebutuhan_khusus_ayah,nama_ibu,tanggal_lahir_ibu,pendidikan_ibu,pekerjaan_ibu,
            penghasilan_ibu,kebutuhan_khusus_ibu) VALUES('$tanggal','$jenis_pendataran','$tanggal_masuk_sekolah', '$nis',
            '$no_peserta_ujian','$paud','$tk','$no_skhun','$no_ijazah','$hobi', '$cita2', '$nama','$jenis_kelamin', '$nisn', 
            '$nik', '$tempat_lahir','$tanggal_lahir', '$agama', '$kebutuhan_khusus','$jalan','$rt',  '$rw',  '$dusun',
            '$desa', '$kecamatan',  '$kode_pos', '$tempat_tinggal','$transportasi','$no_hp', '$no_telp', '$email', '$kps_pkh_kip', 
            '$no_kps_pkh_kip','$kewarganegaraan','$negara', '$nama_ayah', '$tanggal_lahir_ayah', '$pendidikan_ayah',
            '$pekerjaam_ayah', '$penghasilan_ayah','$kebutuhan_khusus_ayah', '$nama_ibu','$tanggal_lahir_ibu', 
            '$pendidikan_ibu', '$pekerjaan_ibu', '$penghasilan_ibu','$kebutuhan_khusus_ibu')")) {
             header("location: formulirPesertaDidik.php");
             exit();
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
    }

    function cek_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Formulir Peserta Didik</title>
    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- datetimepicker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- font awensome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jquey -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>

</head>

<body>
    <div class="container" style="padding: 30px 0;">
        <div class="row">

            <div class="panel-heading" style="font-size: 28px;  font-weight:600;">
                Formulir Peserta Didik
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="post">
                    <br>
                    <div class="form-group row">
                        <div class="row form-group">
                            <label for="jenisPendaftaran" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">Tanggal</label>
                            <div class="col-sm-6">
                                <div class="input-group date" id="datepicker">
                                    <input type="text" class="form-control" name="tanggal" placeholder="dd/mm/yyyy">
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-white d-block">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="panel-heading"
                        style="font-size: 20px;  text-align: left; padding-left:10px;  font-weight:600;">
                        Registrasi Peserta Didik
                    </div>
                    <br>
                    <div class="panel-body">
                        <div class="form-group row">
                            <label for="jenisPendaftaran" class="col-sm-2 col-form-label" style="font-size: 18px;">Jenis
                                Pendaftaran</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_pendataran"
                                        id="inlineRadio1" value="Siswa Baru">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_pendataran"
                                        id="inlineRadio2" value="Pindahan">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <label for="staticEmail" class="col-sm-2 col-form-label">1)
                                    Siswa Baru &nbsp; 2) Pindahan</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="row form-group">
                                <label for="jenisPendaftaran" class="col-sm-2 col-form-label"
                                    style="font-size: 18px;">Tanggal Masuk Sekolah</label>
                                <div class="col-sm-10">
                                    <div class="input-group date" id="datepicker2">
                                        <input type="text" class="form-control" name="tanggal_masuk_sekolah">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">NIS</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS...">

                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nomor
                                Peserta Ujian</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nis" name="no_peserta_ujian"
                                    placeholder="Nomor Peserta Ujian">
                                <small class="form-text text-muted">*Nomor peserta ujian adalah 20 digit yang tertera
                                    dalam sertifikat <span class="text-danger">SKHUN SD</span> diisi bagi peserta didik
                                    jenjang SMP</small>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="jenisPendaftaran" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">Apakah
                                Pernah PAUD</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="paud" id="inlineRadio1"
                                        value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="paud" id="inlineRadio2"
                                        value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"> &nbsp;</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="jenisPendaftaran" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">Apakah
                                Pernah TK</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tk" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tk" id="inlineRadio2"
                                        value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"> &nbsp;</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">No. Seri
                                SKHUN Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_skhun" id="nis"
                                    placeholder="Nomor Peserta Ujian">
                                <small class="form-text text-muted">*Diisi 16 digit yang tertera di <span
                                        class="text-danger">SKHUN SD</span> -diisi bagi PD jenjang SMP
                                    jenjang SMP</small>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">No. Seri
                                Ijazah Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_ijazah" class="form-control" id="nis"
                                    placeholder="Nomor Peserta Ujian">
                                <small class="form-text text-muted">*Diisi 16 digit yang tertera di <span
                                        class="text-danger">Ijazah SD</span> -diisi bagi PD jenjang SMP
                                    jenjang SMP</small>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">Hobi</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="hobi">
                                    <option>Pilih Hobi Anda...</option>
                                    <option value="Olah Raga">Olah Raga</option>
                                    <option value="Kesenian">Kesenian</option>
                                    <option value="Menulis">Menulis</option>
                                    <option value="Traveling">Traveling</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">Cita-cita</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="cita2">
                                    <option>Pilih Cita-cita Anda...</option>
                                    <option value="PNS">PNS</option>
                                    <option value="TNI/ POLRI">TNI/ POLRI</option>
                                    <option value="Guru/ Dosen">Guru/ Dosen</option>
                                    <option value="Dokter">Dokter</option>
                                    <option value="Politikus">Politikus</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Seni/ Lukis/ Artis/ Sejenisnya">Seni/ Lukis/ Artis/ Sejenisnya
                                    </option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="panel-heading"
                        style="font-size: 20px;  text-align: left; padding-left:10px;  font-weight:600;">
                        Data Pribadi
                    </div>
                    <div class="panel-body">
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nama
                                Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="nis"
                                    placeholder="Nama Lengkap...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="jenisPendaftaran" class="col-sm-2 col-form-label" style="font-size: 18px;">Jenis
                                Kelamin</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1"
                                        value="Laki-laki">
                                    <label class="form-check-label" for="inlineRadio1"><i class="fa fa-male"
                                            aria-hidden="true"></i>
                                        Laki-laki </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2"
                                        value="Perempuan">
                                    <label class="form-check-label" for="inlineRadio2"><i class="fa fa-female"
                                            aria-hidden="true"></i>
                                        Perempuan</label>
                                </div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"> &nbsp;</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">NISN</label>
                            <div class="col-sm-10">
                                <input type="text" name="nisn" class="form-control" id="nis" placeholder="NISN...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" name="nik" class="form-control" id="nis" placeholder="NIK...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Tempat
                                Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" name="tempat_lahir" class="form-control" id="nis"
                                    placeholder="Tempat Lahir...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="row form-group">
                                <label for="jenisPendaftaran" class="col-sm-2 col-form-label"
                                    style="font-size: 18px;">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <div class="input-group date" id="datepicker3">
                                        <input type="text" class="form-control" name="tanggal_lahir">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">Agama</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="agama">
                                    <option>Pilih...</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen/ Protestan">Kristen/ Protestan</option>
                                    <option value="Khatolik">Khatolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Khong Hu Chu">Khong Hu Chu</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Kebutuhan
                                Khusus</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="kebutuhan_khusus">
                                    <option>Pilih...</option>
                                    <option value="Tidak Ada">Tidak Ada</option>
                                    <option value="Netra">Netra</option>
                                    <option value="Rungu">Rungu</option>
                                    <option value="Grahita Ringan">Grahita Ringan</option>
                                    <option value="Grahita Sedang">Grahita Sedang</option>
                                    <option value="Daksa Ringan">Daksa Ringan</option>
                                    <option value="Daksa Sedang">Daksa Sedang</option>
                                    <option value="Laras">Laras</option>
                                    <option value="Wicara">Wicara</option>
                                    <option value="Tuna Ganda">Tuna Ganda</option>
                                    <option value="Hiper Aktif">Hiper Aktif</option>
                                    <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                    <option value="Bakat Istimewa">Bakat Istimewa</option>
                                    <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                    <option value="Narkoba">Narkoba</option>
                                    <option value="Indigo">Indigo</option>
                                    <option value="Down Sindrome">Down Sindrome</option>
                                    <option value="Autis">Autis</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Alamat
                                Jalan</label>
                            <div class="col-sm-10">
                                <input type="text" name="jalan" class="form-control" id="nis"
                                    placeholder="Alamat Jalan...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">RT</label>
                            <div class="col-sm-2">
                                <input type="text" name="rt" class="form-control" id="nis" placeholder="RT...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">RW</label>
                            <div class="col-sm-2">
                                <input type="text" name="rw" class="form-control" id="nis" placeholder="RW...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nama
                                Dusun</label>
                            <div class="col-sm-10">
                                <input type="text" name="dusun" class="form-control" id="nis"
                                    placeholder="Nama Dusun...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nama
                                Kelurahan Desa</label>
                            <div class="col-sm-10">
                                <input type="text" name="desa" class="form-control" id="nis"
                                    placeholder="Nama Kelurahan Desa...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">Kecamatan</label>
                            <div class="col-sm-10">
                                <input type="text" name="kecamatan" class="form-control" id="nis"
                                    placeholder="Kecamatan...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Kode
                                Pos</label>
                            <div class="col-sm-10">
                                <input type="text" name="kode_pos" class="form-control" id="nis"
                                    placeholder="Kode Pos...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Tempat
                                Tinggal</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="tempat_tinggal">
                                    <option>Pilih...</option>
                                    <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                    <option value="Wali">Wali</option>
                                    <option value="Kos">Kos</option>
                                    <option value="Asrama">Asrama</option>
                                    <option value="Panti Asuhan">Panti Asuhan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Modal
                                Transportasi</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="transportasi">
                                    <option>Pilih...</option>
                                    <option value="Jalan Kaki">Jalan Kaki</option>
                                    <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                    <option value="Kendaraan Umum/ Angkot/ Pete-pete">Kendaraan Umum/ Angkot/
                                        Pete-pete
                                    </option>
                                    <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                                    <option value="Kereta Api">Kereta Api</option>
                                    <option value="Ojek">Ojek</option>
                                    <option value="Andong/ Bendi/ Sado/ Dokar/ Delman/ Becak">Andong/ Bendi/ Sado/
                                        Dokar/ Delman/ Becak</option>
                                    <option value="Perahu Penyebrangan/ Rakit/ Getek">Perahu Penyebrangan/ Rakit/
                                        Getek
                                    </option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nomor
                                HP</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_hp" class="form-control" id="nis" placeholder="Nomor HP...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nomor
                                Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_telp" class="form-control" id="nis"
                                    placeholder="Nomor Telepon...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Email
                                Pribadi</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="nis" placeholder="Email...">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="jenisPendaftaran" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">Penerimaan KPS/ PKH/ KIP</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kps_pkh_kip" id="inlineRadio1"
                                        value="Ya">
                                    <label class="form-check-label" for="inlineRadio1"><i class="fa fa-id-card-o"
                                            aria-hidden="true"></i> Ya </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kps_pkh_kip" id="inlineRadio2"
                                        value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2"><i class="fa fa-credit-card"
                                            style="text-decoration: line-through;"></i>
                                        Tidak</label>
                                </div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"> &nbsp;</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">No
                                KPS/
                                PKH/ KIP</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_kps_pkh_kip" class="form-control" id="nis"
                                    placeholder="Nomor Peserta Ujian">
                                <small class="form-text text-muted">*Apabila <span
                                        class="text-danger">Menerima</span></small>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="jenisPendaftaran" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">kewarganegaraan</label>
                            <div class="col">
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline" style="margin-top: 8px;">
                                        <input class="form-check-input" type="radio" name="kewarganegaraan"
                                            id="inlineRadio1" value="Indonesia (WNI)">
                                        <label class="form-check-label" for="inlineRadio1"><i class="fa fa-id-card-o"
                                                aria-hidden="true"></i> Indonesia (WNI)
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kewarganegaraan"
                                            id="inlineRadio2" value="Asing (WNA)">
                                        <label class="form-check-label" for="inlineRadio2"><i class="fa fa-credit-card"
                                                style="text-decoration: line-through;"></i>
                                            Asing (WNA)</label>
                                    </div>
                                </div>
                            </div>
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nama
                                Negara</label>
                            <div class="col">
                                <div class="form-group row">
                                    <div class="col-sm-14">
                                        <input type="text" name="negara" class="form-control" id="nis"
                                            placeholder="Nama Negara...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="panel-heading"
                            style="font-size: 20px;  text-align: left; padding-left:10px;  font-weight:600;">
                            Data Ayah Kandung
                        </div>
                        <div class="panel-body">
                            <br>
                            <div class="form-group row">
                                <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nama
                                    Ayah Kandung</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_ayah" class="form-control" id="nis"
                                        placeholder="Nama Ayah Kandung...">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <div class="row form-group">
                                    <label for="jenisPendaftaran" class="col-sm-2 col-form-label"
                                        style="font-size: 18px;">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date" id="datepicker4">
                                            <input type="text" class="form-control" name="tanggal_lahir_ayah">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                    style="font-size: 18px;">Pendidikan</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="pendidikan_ayah">
                                        <option>Pilih...</option>
                                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                                        <option value="Putus SD">Putus SD</option>
                                        <option value="SD Sederajat">SD Sederajat</option>
                                        <option value="SMP Sederajat">SMP Sederajat</option>
                                        <option value="SMA Sederajat">SMA Sederajat</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                        <option value="D4/ S1">D4/ S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                    style="font-size: 18px;">Pekerjaan</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="pekerjaam_ayah">
                                        <option>Pilih...</option>
                                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                                        <option value="Nelayan">Nelayan</option>
                                        <option value="Petani">Petani</option>
                                        <option value="Peternak">Peternak</option>
                                        <option value="PNS/ TNI/ POLRI">PNS/ TNI/ POLRI</option>
                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                        <option value="Pedagang Kecil">Pedagang Kecil</option>
                                        <option value="Pedagang Besar">Pedagang Besar</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Wirausaha">Wirausaha</option>
                                        <option value="Buruh">Buruh</option>
                                        <option value="Pensiunan">Pensiunan</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                    style="font-size: 18px;">Penghasilan Bulanan</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="penghasilan_ayah">
                                        <option>Pilih...</option>
                                        <option value="< Rp 500.000">
                                            < Rp 500.000</option>
                                        <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999
                                        </option>
                                        <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp.
                                            1.999.999</option>
                                        <option value="Rp. 2.000.000 - Rp. 4.999.999">Rp. 2.000.000 - Rp.
                                            4.999.999</option>
                                        <option value="Rp. 5.000.000 - Rp. 20.000.000">Rp. 5.000.000 - Rp.
                                            20.000.000
                                        </option>
                                        <option value="> Rp. 20.000.000">> Rp. 20.000.000</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                    style="font-size: 18px;">Kebutuhan
                                    Khusus</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="kebutuhan_khusus_ayah">
                                        <option>Pilih...</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                        <option value="Netra">Netra</option>
                                        <option value="Rungu">Rungu</option>
                                        <option value="Grahita Ringan">Grahita Ringan</option>
                                        <option value="Grahita Sedang">Grahita Sedang</option>
                                        <option value="Daksa Ringan">Daksa Ringan</option>
                                        <option value="Daksa Sedang">Daksa Sedang</option>
                                        <option value="Laras">Laras</option>
                                        <option value="Wicara">Wicara</option>
                                        <option value="Tuna Ganda">Tuna Ganda</option>
                                        <option value="Hiper Aktif">Hiper Aktif</option>
                                        <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                        <option value="Bakat Istimewa">Bakat Istimewa</option>
                                        <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                        <option value="Narkoba">Narkoba</option>
                                        <option value="Indigo">Indigo</option>
                                        <option value="Down Sindrome">Down Sindrome</option>
                                        <option value="Autis">Autis</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="panel-heading"
                                style="font-size: 20px;  text-align: left; padding-left:10px;  font-weight:600;">
                                Data Ibu Kandung
                            </div>
                            <div class="panel-body">
                                <br>
                                <div class="form-group row">
                                    <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                        style="font-size: 18px;">Nama
                                        Ibu Kandung</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_ibu" class="form-control" id="nis"
                                            placeholder="Nama Ibu Kandung...">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="row form-group">
                                        <label for="jenisPendaftaran" class="col-sm-2 col-form-label"
                                            style="font-size: 18px;">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <div class="input-group date" id="datepicker5">
                                                <input type="text" class="form-control" name="tanggal_lahir_ibu">
                                                <span class="input-group-append">
                                                    <span class="input-group-text bg-white d-block">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                        style="font-size: 18px;">Pendidikan</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="pendidikan_ibu">
                                            <option>Pilih...</option>
                                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                                            <option value="Putus SD">Putus SD</option>
                                            <option value="SD Sederajat">SD Sederajat</option>
                                            <option value="SMP Sederajat">SMP Sederajat</option>
                                            <option value="SMA Sederajat">SMA Sederajat</option>
                                            <option value="D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value="D3">D3</option>
                                            <option value="D4/ S1">D4/ S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                        style="font-size: 18px;">Pekerjaan</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="pekerjaan_ibu">
                                            <option>Pilih...</option>
                                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                                            <option value="Nelayan">Nelayan</option>
                                            <option value="Petani">Petani</option>
                                            <option value="Peternak">Peternak</option>
                                            <option value="PNS/ TNI/ POLRI">PNS/ TNI/ POLRI</option>
                                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                                            <option value="Pedagang Kecil">Pedagang Kecil</option>
                                            <option value="Pedagang Besar">Pedagang Besar</option>
                                            <option value="Wiraswasta">Wiraswasta</option>
                                            <option value="Wirausaha">Wirausaha</option>
                                            <option value="Buruh">Buruh</option>
                                            <option value="Pensiunan">Pensiunan</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                        style="font-size: 18px;">Penghasilan Bulanan</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="penghasilan_ibu">
                                            <option>Pilih...</option>
                                            <option value=" < Rp 500.000">
                                                < Rp 500.000</option>
                                            <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp.
                                                999.999</option>
                                            <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 -
                                                Rp. 1.999.999</option>
                                            <option value="Rp. 2.000.000 - Rp. 4.999.999">Rp. 2.000.000 -
                                                Rp. 4.999.999</option>
                                            <option value="Rp. 5.000.000 - Rp. 20.000.000">Rp. 5.000.000 -
                                                Rp. 20.000.000
                                            </option>
                                            <option value="> Rp. 20.000.000">> Rp. 20.000.000</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="tanggalMasuk" class="col-sm-2 col-form-label"
                                        style="font-size: 18px;">Kebutuhan
                                        Khusus</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="kebutuhan_khusus_ibu">
                                            <option>Pilih...</option>
                                            <option value="Tidak Ada">Tidak Ada</option>
                                            <option value="Netra">Netra</option>
                                            <option value="Rungu">Rungu</option>
                                            <option value="Grahita Ringan">Grahita Ringan</option>
                                            <option value="Grahita Sedang">Grahita Sedang</option>
                                            <option value="Daksa Ringan">Daksa Ringan</option>
                                            <option value="Daksa Sedang">Daksa Sedang</option>
                                            <option value="Laras">Laras</option>
                                            <option value="Wicara">Wicara</option>
                                            <option value="Tuna Ganda">Tuna Ganda</option>
                                            <option value="Hiper Aktif">Hiper Aktif</option>
                                            <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                            <option value="Bakat Istimewa">Bakat Istimewa</option>
                                            <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                            <option value="Narkoba">Narkoba</option>
                                            <option value="Indigo">Indigo</option>
                                            <option value="Down Sindrome">Down Sindrome</option>
                                            <option value="Autis">Autis</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <label for="staticEmail" class="col-sm-2 col-form-label"> &nbsp;</label>
                                <label for="staticEmail" class="col-sm-2 col-form-label"> &nbsp;</label>
                                <button type="submit" name="Submit" class="btn btn-primary col-md-4">Submit
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </button>

                            </div>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
    });
    $(function() {
        $('#datepicker2').datepicker();
    });
    $(function() {
        $('#datepicker3').datepicker();
    });
    $(function() {
        $('#datepicker4').datepicker();
    });
    $(function() {
        $('#datepicker5').datepicker();
    });
    </script>
</body>

</html>