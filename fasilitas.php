<?php
include 'header.php';
?>

<br><br><br>
<!-- MULAI DISINI -->
<div class="container bg-light px-3 py-5 rounded">
    <h3>Fasilitas Hotel</h3>
    <hr>
    <div class="row">
        <?php
        include 'config.php';
        $sql = mysqli_query($dbconnect, "SELECT * FROM tb_fhotel");
        while ($d = mysqli_fetch_array($sql)) {
        ?>
            <div class="border col-md-5 mx-auto py-3 rounded px-3 my-2">
                <img src="assets2/img/<?php echo $d['gambar'] ?>" alt="gambar tipe" style="width: 100%">
                <h4><?php echo $d['fh_fasilitas'] ?></h4>
                <hr>
                <p><?php echo $d['fh_keterangan'] ?></p>
            </div>


        <?php
        }
        ?>
    </div>


</div>
</div>
<br>
<br>