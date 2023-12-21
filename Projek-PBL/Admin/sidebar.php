<?php
include "proses/connect.php";

$data = mysqli_query($conn, "SELECT COUNT(*) as total_unread FROM tb_feedback WHERE status = 1");

// Periksa apakah query berhasil dijalankan
if ($data) {
    $total = mysqli_fetch_assoc($data);
    $total_status = $total['total_unread'];
} else {
    // Handle error jika query gagal
    $total_status = 0; // Atau Anda bisa menetapkan nilai default lainnya sesuai kebutuhan
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bosstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- link css -->
    <link rel="stylesheet" href="/assets/css/style_dasboard.css">

    <!-- link font awelsome -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <aside>
        <div class="top">
            <div class="logo">
                <img src="../assets/img/logo/Screenshot 2023-11-18 105415.png" alt="">
                <h2>T-<span class="danger">Line</span></h2>
            </div>
            <div class="close" id="close-btn">
                <span class="material-symbols-outlined">
                    close
                </span>
            </div>
        </div>

        <!-- sidebar -->
        <div class="sidebar">
            <a class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'dasboard') || !isset($_GET['x'])) ? 'active' : ''; ?>" href="dasboard">
                <span class="material-symbols-outlined">
                    dashboard
                </span>
                <h3>Dashboard</h3>
            </a>
            <a class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'Ticket') || !isset($_GET['x'])) ? 'active' : ''; ?>" href="Ticket">
                <span class="material-symbols-outlined">
                    local_activity
                </span>
                <h3>Ticket</h3>
            </a>
            <a class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'Film') || !isset($_GET['x'])) ? 'active' : ''; ?>" href="Film">
                <span class="material-symbols-outlined">
                    movie
                </span>
                <h3>Film</h3>
            </a>
            <a class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'Berita') || !isset($_GET['x'])) ? 'active' : ''; ?>" href="Berita">
                <span class="material-symbols-outlined">
                    breaking_news
                </span>
                <h3>Berita</h3>
            </a>
            <a class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'PromoAdmin') || !isset($_GET['x'])) ? 'active' : ''; ?>" href="PromoAdmin">
                <span class="material-symbols-outlined">
                    shopping_bag
                </span>
                <h3>Promo</h3>
            </a>
            <a class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'Makanan') || !isset($_GET['x'])) ? 'active' : ''; ?>" href="Makanan">
                <span class="material-symbols-outlined">
                    restaurant_menu
                </span>
                <h3>Makanan</h3>
            </a>
            <a class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'Theater') || !isset($_GET['x'])) ? 'active' : ''; ?>" href="Theater">
                <span class="material-symbols-outlined">
                    theaters
                </span>
                <h3>Theater</h3>
            </a>
            <a class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'User') || !isset($_GET['x'])) ? 'active' : ''; ?>" href="User">
                <span class="material-symbols-outlined">
                    person_outline
                </span>
                <h3>User</h3>
            </a>
            <a class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'Messages') || !isset($_GET['x'])) ? 'active' : ''; ?>" href="Messages">
                <span class="material-symbols-outlined">
                    mail
                </span>
                <h3>Messages</h3>
                <span class="message-count" style="display: <?php echo ( $total_status == 0) ? 'none' : '';?>;" ><?php echo $total_status ?></span>
            </a>
            <a class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'Orders') || !isset($_GET['x'])) ? 'active' : ''; ?>" href="Orders">
                <span class="material-symbols-outlined">
                    receipt_long
                </span>
                <h3>Orders</h3>
            </a>
            <a class="<?php echo ((isset($_GET['x']) && $_GET['x'] == 'Report') || !isset($_GET['x'])) ? 'active' : ''; ?>" href="Report">
                <span class="material-symbols-outlined">
                    summarize
                </span>
                <h3>Report</h3>
            </a>
            <a href="/proses/proses_logout.php">
                <span class="material-symbols-outlined">
                    logout
                </span>
                <h3>Logout</h3>
            </a>
        </div>
    </aside>
</body>

</html>