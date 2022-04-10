<?php
include 'config.php';
session_start();


if (isset($_POST['masuk'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($dbconnect, "SELECT * FROM tb_user WHERE username='$username' and password='$password'");


    $data = mysqli_fetch_assoc($query);



    $check = mysqli_num_rows($query);

    if (!$check) {
        $_SESSION['error'] = 'Username & password salah';
    } else {
        $_SESSION['userid'] = $data['id_user'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['level'] = $data['level'];

        header('location:home.php');
    }
}

if (isset($_POST['simpan'])) {
    header('location:tamu/register.php');
}

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title></title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <link href="/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <form method="post" class="form-signin">

        <?php if (isset($_SESSION['error']) && $_SESSION['error'] != '') { ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION['error'] ?>
            </div>
        <?php }
        $_SESSION['error'] = '';
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto pt-5">
                    <h1 class="h3 mb-3 font-weight-normal">SELAMAT DATANG</h1>
                    <form>
                        <div class="form-group">
                            <label for="inputEmail" class="sr-only">Username</label>
                            <input type="text" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div>
                            <input type="submit" name="masuk" value="Sign in" class="btn btn-lg btn-primary btn-block" />
                            <input type="submit" name="simpan" value="Daftar Sekarang" class="btn btn-lg btn-primary btn-block" href="../register.php" />

                        </div>

                    </form>
    </form>

</body>

</html>