<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- icon bostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- css -->
    <link rel="stylesheet" href="/assets/css/Navbar.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <img src="../assets/img/logo/Screenshot 2023-11-18 105415.png" style="width: 3.5rem;" class="mx-3">
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- menu untuk layar besar -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a aria-current="page" class="nav-link hover-underline <?php echo ((isset($_GET['x']) && $_GET['x'] == 'Home') || !isset($_GET['x'])) ? 'active' : '' ?>" href="Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-underline" href="#nowPlaying">Now Playing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-underline <?php echo (isset($_GET['x']) && $_GET['x'] == 'Upcoming') ? 'active' : '' ?>" href="Upcoming">Upcoming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-underline <?php echo (isset($_GET['x']) && $_GET['x'] == 'Theaters') ? 'active' : '' ?>" href="Theaters">Theaters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-underline <?php echo (isset($_GET['x']) && $_GET['x'] == 'Menu') ? 'active' : '' ?>" href="Menu">Snack</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Info
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item <?php echo (isset($_GET['x']) && $_GET['x'] == 'Promo') ? 'active' : '' ?>" href="Promo">Promo</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item <?php echo (isset($_GET['x']) && $_GET['x'] == 'News') ? 'active' : '' ?>" href="News">News</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- formulir pencarian dan nama pengguna untuk layar kecil -->
            <div class="collapse navbar-collapse justify-content-end d-flex d-lg-none flex-row align-items-center order-1 ms-3" id="navbarNavDropdown">
                <!-- search -->
                <form role="search" id="navbarSearchForm" style="display: none;">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <!-- user -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                            if (empty($_SESSION['username_TLine'])) {
                                echo "User";
                            } else {
                                echo $hasil['nama'];
                            }

                            ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ModalUbahProfile"><i class="bi bi-person-square"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ModalUbahPassword"><i class="bi bi-key"></i> Ubah Password</a></li>
                            <?php
                            if (empty($_SESSION['username_TLine'])) { ?>
                                <li><a class="dropdown-item" href="login"><i class="bi bi-box-arrow-in-left"></i> Login</a></li>
                            <?php } else { ?>
                                <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                            <?php }
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ... (konten lainnya) ... -->

    <!-- JavaScript dan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>