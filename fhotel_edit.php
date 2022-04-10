<?php
include 'header.php';
?>



<div class="container">
    <?php
    include '../config.php';

    $id = $_GET['id'];
    $sql = mysqli_query($dbconnect, "SELECT * FROM tb_fhotel WHERE fh_id=$id");
    $d = mysqli_fetch_array($sql);

    ?>
    <br><br>
    <div class="row">
        <div class="col-md-4 mx-auto bg-light p-5">
            <h5>Edit</h5>
            <h3 class="text-center">Fasilitas Kamar</h3>
            <hr>
            <form action="action/fh_update.php?" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    <label>Fasilitas</label>
                    <input type="text" name="fas" value="<?php echo $d['fh_fasilitas'] ?>" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="ket" value="<?php echo $d['fh_keterangan'] ?>" class="form-control" required="required">
                </div>
                <br>
                <div class="form-group d-flex justify-content-between">
                    <input type="submit" value="Ubah" class="btn btn-primary">
                    <a href="fhotel.php" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>