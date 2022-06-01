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

    <?php
$error_tanggal = "";
$error_jenis_pendaftaran = "";
$error_tanggal_masuk_sekolah = "";
$error_nis = "";
$error_no_peserta_ujian = "";
$error_paud = "";
$error_tk = "";
$error_no_skhun = "";
$error_no_ijazah = "";
$error_hobi = "";
$error_cita2 = "";

$tanggal = "";
$jenis_pendaftaran = "";
$tanggal_masuk_sekolah = "";
$nis = "";
$no_peserta_ujian = "";
$paud = "";
$tk = "";
$no_skhun = "";
$no_ijazah = "";
$hobi = "";
$cita2 = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // validasi telp
    if(empty($_POST["nis"])){
        $error_nis = "Telephon tidak boleh kosong";
    }else{
        $nis = cek_input($_POST["nis"]);
        if(!is_numeric($nis)){
            $error_nis = "Nomor telephon hanya boleh angka";
        }
    }
}

function cek_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>

    <div class="container" style="padding: 30px 0;">
        <div class="row">

            <div class="panel-heading" style="font-size: 28px;  font-weight:600;">
                Formulir Peserta Didik
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="proses_insert_1.php" method="post">
                    <br>
                    <div class="form-group row">
                        <div class="row form-group">
                            <label for="jenisPendaftaran" class="col-sm-2 col-form-label"
                                style="font-size: 18px;">Tanggal</label>
                            <div class="col-sm-6">
                                <div class="input-group date" id="datepicker1">
                                    <input type="text" class="form-control" name="tanggal">
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
                    <div class="form-group row">
                        <label for="jenisPendaftaran" class="col-sm-2 col-form-label" style="font-size: 18px;">Jenis
                            Pendaftaran</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_pendaftaran" id="inlineRadio1"
                                    value="Siswa Baru">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_pendaftaran" id="inlineRadio2"
                                    value="Pindahan">
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
                        <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">NIS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?php echo($error_nis !="" ? "is-invalid" : ""); ?>"
                                id="nis" name="nis" placeholder="NIS...">
                            <span class="warning"><?php echo $error_nis; ?></span>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nomor
                            Peserta Ujian</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nis" name="nomor_peserta_ujian"
                                placeholder="Nomor Peserta Ujian">
                            <small class="form-text text-muted">*Nomor peserta ujian adalah 20 digit yang tertera
                                dalam sertifikat <span class="text-danger">SKHUN SD</span> diisi bagi peserta didik
                                jenjang SMP</small>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="jenisPendaftaran" class="col-sm-2 col-form-label" style="font-size: 18px;">Apakah
                            Pernah PAUD</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="paud" id="inlineRadio1" value="Ya">
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
                        <label for="jenisPendaftaran" class="col-sm-2 col-form-label" style="font-size: 18px;">Apakah
                            Pernah TK</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tk" id="inlineRadio1" value="Ya">
                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tk" id="inlineRadio2" value="Tidak">
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
                        <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Hobi</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="hobi">
                                <option>Pilih Hobi Anda...</option>
                                <option value="Olah Raga">Olah Raga</option>
                                <option value="Kesenian">Kesenian</option>
                                <option value="Menulis">Menulis</option>
                                <option value="Membaca">Traveling</option>
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
                            <br>
                            <button type="submit" name="Submit" class="btn btn-primary pull-right"><a
                                    href="formulir-pesertadidik-2.php"></a> Selanjutnya</a>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
    </div>


    <script type="text/javascript">
    $(function() {
        $('#datepicker1').datepicker();
    });
    $(function() {
        $('#datepicker2').datepicker();
    });
    </script>
</body>

</html>