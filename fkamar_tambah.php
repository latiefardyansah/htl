<?php
include 'header.php';
?>



<div class="container">
    <?php
    include '../config.php';

    $sql = mysqli_query($dbconnect, "SELECT * FROM tb_jkamar");

    ?>
    <br><br><br><br><br><br>
    <div class="row">
        <div class="col-md-4 mx-auto bg-light p-5">
            <h3 class="text-center">Tambah Fasilitas Kamar</h3>
            <hr>
            <form action="action/fk_insert.php?" method="post">
                <div class="form-group">
                    <label>Nama Tipe Kamar</label>
                    <select type="text" name="tipe" class="form-control" required="required">
                        <option disabled selected>-- Tipe Kamar --</option>
                        <?php
                        while ($d = mysqli_fetch_array($sql)) {
                        ?>
                            <option value="<?php echo $d['jk_id']; ?>"><?php echo $d['jk_tipe']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah Fasilitas</label>
                    <input type="number" name="jfasilitas" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Fasilitas</label>
                    <textarea type="text" name="fasilitas" class="form-control" required="required"></textarea/>
                    </div>
                    <br>
                    <div class="form-group d-flex justify-content-between">
                        <input type="submit" value="Tambah" class="btn btn-primary" name="Simpan">
                        <a href="fkamar.php" class="btn btn-warning">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>