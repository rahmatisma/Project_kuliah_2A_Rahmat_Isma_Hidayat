<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memilih Metode Pembayaran</title>

    <!-- link css -->
    <link rel="stylesheet" href="/assets/css/pemilihan_pembayaran.css">

    <!-- link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <!-- link font awelsome  -->
    <script src="https://kit.fontawesome.com/90ac0be598.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="Kiri col-lg-6 col-md-12">
                <div class="header">
                    <a href="/Page pemesanan kursi/page_pemesanan_kursi.html" class="icon-panah">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <h3>Order Summary</h3><span></span>
                </div>

                <div class="pemberitahuan">
                    <p>Please complete your payment now, Otherwise your ticket
                        will be released.
                    </p>
                </div>

                <div class="pemilihan-pembayaran">
                    <img src="/payment-business-finance-logo-organization-png-fav-removebg-preview.png" class="Gambar">
                    <h3>Choose Payment Method</h3>
                </div>

                <div class="payment-methods">

                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-2">
                                <label class="checkbox-container">
                                    <input type="checkbox" class="card-checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-7">
                                <div class="card-body">
                                    <h5 class="card-title">Credit Card / Debit Card</h5>
                                </div>
                            </div>
                            <div class="col-3">
                                <img src="/download.jpeg" alt="MasterCard" class="gambar-card">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-2">
                                <label class="checkbox-container" for="checkbox-input">
                                    <input type="checkbox" id="checkbox-input" class="card-checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-7">
                                <div class="card-body">
                                    <h5 class="card-title">Gopay</h5>
                                </div>
                            </div>
                            <div class="col-3">
                                <img src="/gopay.jpeg" alt="Gopay" class="gambar-card">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-2">
                                <label class="checkbox-container">
                                    <input type="checkbox" class="card-checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-7">
                                <div class="card-body">
                                    <h5 class="card-title">BCA Virtual Account</h5>
                                </div>
                            </div>
                            <div class="col-3">
                                <img src="/bca.jpeg" alt="BCA Virtual Account" class="gambar-card">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-2">
                                <label class="checkbox-container">
                                    <input type="checkbox" class="card-checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-7">
                                <div class="card-body">
                                    <h5 class="card-title">Permata Virtual Account</h5>
                                </div>
                            </div>
                            <div class="col-3">
                                <img src="/permata.jpeg" alt="Permata Virtual Account" class="gambar-card">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="kanan col-lg-6 col-md-12">
                <div class="keterangan-header">
                    <h3>Movie Detail</h3>
                </div>
                <div class="ordered-movie-content">
                    <div class="movie-poster-wrap">
                        <img src="https://cdn.cgv.id/uploads/movie/compressed/23013100.jpg" alt="THE FLASH"
                            class="movie-poster">
                    </div>
                    <div class="detail-film">
                        <h3>THE FLASH</h3>
                        <div class="pemesanan">
                            <p>Cinema</p>
                            <p>CGV - Grand Indonesia</p>
                        </div>
                        <div class="pemesanan">
                            <p>Date &amp; Time</p>
                            <p>Sunday, 2 July 2023</p>
                        </div>
                        <div class="pemesanan">
                            <p>21:05</p>
                        </div>
                        <div class="pemesanan">
                            <p>Studio</p>
                            <p>REGULAR</p>
                        </div>
                        <div class="pemesanan">
                            <p>Seats</p>
                            <p><span>E16|4</span></p>
                        </div>
                    </div>
                </div>

                <div class="header-payment-detail">
                    <h3>Payment Detail</h3>
                </div>
                <div>
                    <div class="ticket-details">
                        <p> Ticket price </p>
                        <p> Rp75.000 </p>
                    </div>

                    <div class="ticket-details">
                        <p> Convenience fee </p>
                        <p> Rp3.000 </p>
                    </div>

                    <div class="ticket-details">
                        <p>Admin Fee</p>
                        <p>Free</p>
                    </div>
                </div>
                <div class="total">
                    <div class="ticket-details">
                        <p>Total</p>
                        <p>Rp78.000</p>
                    </div>
                </div>
                <a href="pembayaran.php">
                    <button class="button-bayar mb-5">Pay Now</button>
                </a>
            </div>
        </div>
    </div>

    <!-- script boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <!-- script font awelsome -->
    <script src="https://kit.fontawesome.com/90ac0be598.js" crossorigin="anonymous"></script>

    <script>
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.addEventListener('click', () => {
                const checkbox = card.querySelector('.card-checkbox');
                checkbox.checked = !checkbox.checked;
            });
        });
    </script>

</body>

</html>