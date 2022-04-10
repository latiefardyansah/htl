<?php
include 'header.php';
?>




<div class="container">
    <?php
    include '../config.php';

    $sql = mysqli_query($dbconnect, "SELECT * FROM tb_fhotel");

    ?>
    <br><br><br><br>
    <div class="row">
        <div class="col-md-4 mx-auto bg-light p-5">
            <h3 class="text-center">Tambah Fasilitas Hotel</h3>
            <hr>
            <form action="action/fh_insert.php?" method="post">

                <div class="form-group">
                    <label>Fasilitas</label>
                    <input type="text" name="fas" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="ket" class="form-control" required="required">
                </div>
                <br>
                <div class="form-group d-flex justify-content-between">
                    <input type="submit" value="Tambah" class="btn btn-primary" name="Simpan">
                    <a href="fhotel.php" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>