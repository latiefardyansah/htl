<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'myhotelku';

$dbconnect = mysqli_connect("$host", "$user", "$pass", "$db");

if ($dbconnect->connect_error) {
    echo 'Koneksi gagal -> ' . $dbconnect->connect_error;
}
