<html>

<head>
    <title></title>

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <br />
        <br />
        <br />
        <div class="col-md-5 col-md-offset-3">
            <div class="panel">
                <div class="panel-heading">
                    <h4>Registrasi</h4>
                    <a href="../login.php" class="btn btn-warning btn-sm pull-right"><i class="fa fareply"></i> &nbsp
                        Kembali</a>
                </div>
                <div class="panel-body">
                    <form action="registrasi_addaction.php" method="post">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan Nama ..">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" required="required" placeholder="Masukkan alamat ..">
                        </div>
                        <div class="form-group">
                            <label>No. Telephone</label>
                            <input type="number" class="form-control" name="telp" required="required" placeholder="Masukkan No Telephone ..">
                        </div>
                        <div class="form-group">
                            <label></label>
                            <select class="form-control" name="gender" required="required">
                                <option disabled selected> -- Pilih Gender --</option>
                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="level" value="4">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>