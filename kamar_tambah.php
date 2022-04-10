<?php
include 'header.php';
?>


<div class="container">
    <br><br><br><br><br><br>
    <div class="row">
        <div class="col-md-4 mx-auto bg-light p-5">
            <h3 class="text-center">Tambah Data Kamar</h3>
            <hr>
            <form action="action/jk_insert.php?" method="post">
                <div class="form-group">
                    <label>Nama Tipe Kamar</label>
                    <input type="text" name="tipe" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Jumlah Kamar</label>
                    <input type="number" name="jk" class="form-control" required="required">
                </div>
                <br>
                <div class="form-group d-flex justify-content-between">
                    <input type="submit" value="Tambah" class="btn btn-primary" name="Simpan">
                    <a href="index.php" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>