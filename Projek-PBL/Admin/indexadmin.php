<?php
    if (isset($_GET['x']) && $_GET['x'] == 'dasboard') {
        $page = "dasboard.php";
        include "mainadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Ticket') {
        $page = "ticket.php";
        include "mainadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Film') {
        $page = "film.php";
        include "mainadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Berita') {
        $page = "berita.php";
        include "mainadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'PromoAdmin') {
        $page = "Admin/promo.php";
        include "mainadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Makanan') {
        $page = "makanan.php";
        include "mainadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Theater') {
        $page = "Admin/theaters.php";
        include "mainadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'User') {
        $page = "user.php";
        include "mainadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Messages') {
        $page = "messages.php";
        include "mainadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Orders') {
        $page = "orders.php";
        include "mainadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Report') {
        $page = "report.php";
        include "mainadmin.php";
    }
    ?>
