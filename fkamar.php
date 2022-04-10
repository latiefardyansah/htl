<?php
include 'header.php';
?>



<br><br><br>
<div class="container px-3 py-5 bg-light">

    <h3>Data Fasilitas Kamar</h3>

    <table class="table table-bordered table-striped table-hover" id="table-datatable">
        <thead>
            <tr>
                <th style="width: 1%;">No</th>
                <th>Tipe Kamar</th>
                <th>Jumlah</th>
                <th>Fasilitas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../config.php';
            $sql = mysqli_query($dbconnect, "SELECT * FROM tb_fkamar INNER JOIN tb_jkamar WHERE tb_fkamar.fk_tipe = tb_jkamar.jk_id");
            $no = 1;
            while ($d = mysqli_fetch_array($sql)) {

            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $d['jk_tipe']; ?></td>
                    <td><?php echo $d['fk_jumlah'] ?></td>
                    <td><?php echo $d['fk_fasilitas'] ?></td>
                    <td><a href="fkamar_edit.php?id=<?php echo $d['fk_id'] ?>" class="btn btn-sm btn-warning">Edit</a>&nbsp;<a href="action/fk_delete.php?id=<?php echo $d['fk_id'] ?>" class="btn btn-sm btn-danger">hapus</a></td>
                </tr>
            <?php } ?>
        </tbody>


    </table>
    <div class="row">
        <div class="col d-flex justify-content-end">
            <a href="fkamar_tambah.php" class="btn btn-sm btn-success m-1">Tambah Tipe</a>
        </div>
    </div>
</div>