<?php
include 'header.php';
?>



<br><br><br>
<div class="container px-3 py-5 bg-light rounded">

    <h3>Daftar Tipe Kamar</h3>
    <hr>
    <div class="row">
        <?php
        include '../config.php';
        $sql = mysqli_query($dbconnect, "SELECT * FROM tb_jkamar");

        while ($d = mysqli_fetch_array($sql)) {
            $no = $d['jk_id'];
            $sql2 = mysqli_query($dbconnect, "SELECT * FROM tb_fkamar WHERE fk_tipe=$no");
        ?>
            <div class="col-md-5 mx-auto py-3 px-2 my-3 rounded">
                <a class="" data-bs-toggle="collapse" href="#collapseX<?php echo $no; ?>" role="button" aria-expanded="false" aria-controls="collapseX<?php echo $no; ?>">
                    <!-- img.. for now, in the future will from database -->
                    <img src="../assets2/img/<?php echo $d['image'] ?>" alt="gambar tipe" style="width: 100%">
                    <h4><?php echo $d['jk_tipe'] ?></h4>
                </a>
                <div class="collapse multi-collapse" id="collapseX<?php echo $no; ?>">
                    <div class="card card-body">
                        <?php echo "Jumlah Kamar : " . $d['jk_jumlah']; ?>
                        <hr>
                        <h6>Fasilitas</h6>
                        <?php
                        while ($fk = mysqli_fetch_array($sql2)) {
                        ?>
                            <div class="d-flex flex-row">
                                <p><?php echo $fk['fk_jumlah'] . "x"; ?>&nbsp;</p>
                                <p><?php echo $fk['fk_fasilitas']; ?></p>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
                <hr>
            </div>

        <?php
        }
        ?>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-end">
            <a href="reservasi.php" class="btn btn-primary">Pesan Kamar</a>
        </div>
    </div>
</div>





</body>

</html>