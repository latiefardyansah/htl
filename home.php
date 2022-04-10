<?php
include 'config.php';
session_start();


if (isset($_SESSION['userid'])) {
    if ($_SESSION['level'] == 1) {


        header('location:admin/index.php');
    }


    if (isset($_SESSION['userid'])) {
        if ($_SESSION['level'] == 4)


            header('location:manager.php');
    }

    if (isset($_SESSION['userid'])) {
        if ($_SESSION['level'] == 2)


            header('location:resepsionis/index.php');

        if (isset($_SESSION['userid'])) {
            if ($_SESSION['level'] == 3)


                header('location:../hotel_ltf/tamu/index.php');
        }
    }
}
