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
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="/Login admin/Lebah ganteng - Copy.webp" alt="">
                    <h2>Lebah <span class="danger">Ganteng</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">
                        close
                    </span>
                </div>
            </div>

            <!-- sidebar -->
            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-symbols-outlined">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        person_outline
                    </span>
                    <h3>Customer</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        receipt_long
                    </span>
                    <h3>Orders</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        flex_no_wrap
                    </span>
                    <h3>corousel</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        mail
                    </span>
                    <h3>Messages</h3>
                    <span class="message-count">26</span>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        info
                    </span>
                    <h3>Info</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        add
                    </span>
                    <h3>Add Product</h3>
                </a>
                <a href="index.html">
                    <span class="material-symbols-outlined">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        <!-- content -->
        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="card sales">
                    <div class="card-body">
                        <span class="material-symbols-outlined">analytics</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total Penjualan</h3>
                                <h1>Rp.xxx</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p class="satu">81%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                </div>
                <!-- end sales -->

                <div class="card income">
                    <div class="card-body">
                        <span class="material-symbols-outlined">stacked_line_chart</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total Income</h3>
                                <h1>Rp.xxx</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p class="tiga">44%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                </div>
                <!-- end income -->
            </div>
            <!-- end insights -->

            <div class="recent-order">
                <h2>Recent Order</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Film Name</th>
                            <th>Seet Number</th>
                            <th>Payment Method</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>The Flash</td>
                            <td>C2</td>
                            <td>Gopay</td>
                            <td class="warning">PendiNG</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>The Flash</td>
                            <td>F3</td>
                            <td>Gopay</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>The Flash</td>
                            <td>A1</td>
                            <td>Gopay</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>The Flash</td>
                            <td>B4</td>
                            <td>Gopay</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>The Flash</td>
                            <td>C1</td>
                            <td>Gopay</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
        </main>
        <!-- end main -->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-outlined">
                        menu
                    </span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-outlined active">
                        sunny
                    </span>
                    <span class="material-symbols-outlined">
                        dark_mode
                    </span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Daniel</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="/Lebah ganteng.webp">
                    </div>
                </div>
            </div>
            <!-- end top -->
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="/Lebah ganteng.webp">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> Membeli ticket pada kursi C2 pada film The Flash.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="/Lebah ganteng.webp">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> Membeli ticket pada kursi C2 pada film The Flash.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="/Lebah ganteng.webp">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> Membeli ticket pada kursi C2 pada film The Flash.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of recent updates -->
        </div>
    </div>

    <script src="/assets/js/script.js"></script>
</body>

</html>