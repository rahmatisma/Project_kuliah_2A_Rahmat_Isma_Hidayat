            <?php
            session_start();
            if (isset($_GET['x']) && $_GET['x'] == 'Home') {
                $page = 'home.php';
                include 'main.php';
            } else if (isset($_GET['x']) && $_GET['x'] == 'Order') {
                $page = 'order.php';
                include 'main.php';
            } else if (isset($_GET['x']) && $_GET['x'] == 'user') {
                if($_SESSION['level_decafe']) {
                    $page = 'user.php';
                    include 'main.php';
                } else {
                    $page = 'home.php';
                    include 'main.php';
                }
            } else if (isset($_GET['x']) && $_GET['x'] == 'Customer') {
                $page = 'customer.php';
                include 'main.php';
            } else if (isset($_GET['x']) && $_GET['x'] == 'Report') {
                if($_SESSION['level_decafe']) {
                    $page = 'report.php';
                    include 'main.php';
                } else {
                    $page = 'home.php';
                    include 'main.php';
                }
            } else if (isset($_GET['x']) && $_GET['x'] == 'menu') {
                $page = 'menu.php';
                include 'main.php';
            } else if (isset($_GET['x']) && $_GET['x'] == 'login') {
                include 'login.php';
            }  else if (isset($_GET['x']) && $_GET['x'] == 'logout') {
                include 'proses/proses_logout.php';
            } else if (isset($_GET['x']) && $_GET['x'] == 'katmenu') {
                $page = 'katmenu.php';
                include 'main.php';
            } else {
                $page = 'home.php';
                include 'main.php';
            }
            ?>