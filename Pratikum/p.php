<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form Validation</title>
    <!-- import bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <?php
$error_nama = "";
$error_email = "";
$error_web = "";
$error_pesan = "";
$error_telp = "";

$nama = "";
$email = "";
$web = "";
$pesan = "";
$telp = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // validasi nama
    if(empty($_POST["nama"])){
        $error_nama = "Nama tidak boleh kosong";
    }else{
        $nama = cek_input($_POST["nama"]);
        if(!preg_match("/^[a-zA-Z]*$/",$nama)){
            $nameErr = "Inputan hanya boleh huruf dan spasi";
        }
    }

    // validasi email
    if(empty($_POST["email"])){
        $error_email = "Email tidak boleh kosong";
    }else{
        $email = cek_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error_email = "Format Email yang anda masukan tidak valid";
        }
    }

    // validasi pesan
    if(empty($_POST["pesan"])){
        $error_pesan = "Pesan tidak boleh kosong";
    }else{
        $pesan = cek_input($_POST["pesan"]);
    }

    // validasi web
    if(empty($_POST["web"])){
        $error_web = "Website tidak boleh kosong";
    }else{
        $web = cek_input($_POST["web"]);
        if(!preg_match("/\b(?:(?:https?|ftp)\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)){
            $error_web = "URL tidak valid";
        }
    }

    // validasi telp
    if(empty($_POST["telp"])){
        $error_telp = "Telephon tidak boleh kosong";
    }else{
        $telp = cek_input($_POST["telp"]);
        if(!is_numeric($telp)){
            $error_telp = "Nomor telephon hanya boleh angka";
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

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Contoh Validasi Form dengan PHP
                </div>
                <div class="card-body">
                    <form action="p_insert.php && <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama"
                                    class="form-control <?php echo ($error_nama != "" ? "is-invalid" : ""); ?>"
                                    id="nama" placeholder="Nama" value="<?php echo $nama; ?>"><span
                                    class="warning"><?php echo $error_nama; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email"
                                    class="form-control <?php echo($error_email !="" ? "is-invalid" : ""); ?>"
                                    id="email" placeholder="Email" value="<?php echo $email; ?>"><span
                                    class="warning"><?php echo $error_email; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="web" class="col-sm-2 col-form-label">Website</label>
                            <div class="col-sm-10">
                                <input type="text" name="web"
                                    class="form-control <?php echo($error_web !="" ? "is-invalid" : ""); ?>" id="web"
                                    placeholder="Website" value="<?php echo $web; ?>"><span
                                    class="warning"><?php echo $error_web; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telp" class="col-sm-2 col-form-label">Nomor Telephon</label>
                            <div class="col-sm-10">
                                <input type="text" name="telp"
                                    class="form-control <?php echo($error_telp !="" ? "is-invalid" : ""); ?>" id="telp"
                                    placeholder="Nomor Telephon" value="<?php echo $telp; ?>"><span
                                    class="warning"><?php echo $error_telp; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                            <div class="col-sm-10">
                                <input type="text" name="pesan"
                                    class="form-control <?php echo($error_pesan !="" ? "is-invalid" : ""); ?>"
                                    id="pesan" placeholder="Nomor Telephon" value="<?php echo $pesan; ?>"><span
                                    class="warning"><?php echo $error_pesan; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="Submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>