<?php
include '../config.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['password'];
$level    = $_POST['level'];

$tamu = "insert into tb_tamu values (NULL,
'$nama','$alamat','$telp','$gender')";
$sql_tamu = mysqli_query($dbconnect, $tamu);

$user = "insert into tb_user values (NULL,'$nama',
'$username','$password','$level')";
$sql_user = mysqli_query($dbconnect, $user);

header("location:../login.php");
