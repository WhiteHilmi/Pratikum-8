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
            <div class="col-md-12">
                <div class="panel-heading"
                    style="font-size: 20px;  text-align: left; padding-left:10px;  font-weight:600;">
                    Data Ibu Kandung
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="proses_insert_4.php" method="post">
                        <br>
                        <div class="form-group row">
                            <label for="tanggalMasuk" class="col-sm-2 col-form-label" style="font-size: 18px;">Nama
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
                                    <div class="input-group date" id="datepicker">
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
                                style="font-size: 18px;">Pendidikan</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="pendidikan">
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
                                <select class="form-control" name="pekerjaan">
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
                                <select class="form-control" name="penghasilan">
                                    <option>Pilih...</option>
                                    <option value=" < Rp 500.000">
                                        < Rp 500.000</option>
                                    <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                                    <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                    <option value="Rp. 2.000.000 - Rp. 4.999.999">Rp. 2.000.000 - Rp. 4.999.999</option>
                                    <option value="Rp. 5.000.000 - Rp. 20.000.000">Rp. 5.000.000 - Rp. 20.000.000
                                    </option>
                                    <option value="> Rp. 20.000.000">> Rp. 20.000.000</option>
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
                        <label for="staticEmail" class="col-sm-2 col-form-label"> &nbsp;</label>
                        <label for="staticEmail" class="col-sm-2 col-form-label"> &nbsp;</label>
                        <button type="submit" name="Submit_4" class="btn btn-primary col-md-4"><a
                                href="thankyou.php"></a> Submit</a>
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
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
    </script>
</body>
</html>