    <?php
    if (isset($_GET['x']) && $_GET['x'] == 'Home') {
        $page = "home.php";
        include "main.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'Upcoming') {
        $page = "Upcoming.php";
        include "main.php";
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
        include "dasboard.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
    ?>
