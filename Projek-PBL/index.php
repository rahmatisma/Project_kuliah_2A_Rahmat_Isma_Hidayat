<?php
    if (isset($_GET['x']) && $_GET['x'] == 'Home') {
        $page = "home.php";
        include "main.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Upcoming') {
        $page = "Upcoming.php";
        include "main.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'DetailUpcoming') {
        $page = "detail_upcoming.php";
        include "main.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'DetailFilm') {
        $page = "detail_film.php";
        include "main.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'PilihKursi') {
        $page = "pemilihan_kursi.php";
        include "main.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'ChoosePayment') {
        include "pemilihan_metode_pembayaran.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Theaters') {
        $page = "Theaters.php";
        include "main.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Promo') {
        $page = "promo.php";
        include "main.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'News') {
        $page = "news.php";
        include "main.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'login') {
        include "login.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'logout') {
        include "proses/proses_logout.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'dasboard') {
        include "Admin/indexadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Ticket') {
        include "Admin/indexadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Film') {
        include "Admin/indexadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Berita') {
        include "Admin/indexadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'PromoAdmin') {
        include "Admin/indexadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Makanan') {
        include "Admin/indexadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Theater') {
        include "Admin/indexadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'User') {
        include "Admin/indexadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Messages') {
        include "Admin/indexadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Orders') {
        include "Admin/indexadmin.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Report') {
        include "Admin/indexadmin.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
    ?>
