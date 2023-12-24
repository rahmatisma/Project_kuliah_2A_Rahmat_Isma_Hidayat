<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>

    <!-- link css -->
    <link rel="stylesheet" href="/assets/css/pembayaran.css">

    <!-- link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <!-- link font awelsome  -->
    <script src="https://kit.fontawesome.com/90ac0be598.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo-header">
                <img src="/Lebah ganteng.webp">
            </div>

            <div class="Waiting" style="text-align: center;">
                <h1>Waiting for payment</h1>
            </div>

            <div class="peringatan">
                <p>
                    Kami telah menerima
                    pesanan Anda. Silahkan selesaikan pembayaran Anda dalam jangka waktu yang telah
                    di tetapkan. Instruksi pembayaran terlampir dibawah ini.
                </p>
            </div>
        </div>

        <div class="detail-pembayaran mt-5">
            <div class="header-panel">
                <div class="logo">
                    <img src="/gopay.jpeg"></div>
                <div class="price">
                    <p>Total Tagihan</p>
                    <h3>Rp79.170</h3>
                </div>
            </div>
            <hr>

            <div class="qr-code">
                <img src="https://api.midtrans.com/v2/gopay/3e37ca0a-97b5-401b-b698-282b3223bcb5/qr-code">
            </div>
            <hr>

            <div class="tata-cara">
                <span><b>How to pay via GoPay</b></span>
                <div class="steps">
                    <ol>
                        <li>Buka aplikasi GoJek dan tekan tombol Scan QR.</li>
                        <li>Scan kode QR yang muncul pada halaman pembayaran.</li>
                        <li>Lihat detail pembayaran dan tekan Pay.</li>
                        <li>Masukkan nomor pin GoPay Anda.</li>
                        <li>Pembayaran dengan menggunakan GoPay selesai.</li>
                    </ol>
                </div>
            </div>
            <hr>

            <div class="konfirmasi ">
                <p class="title"><b>Sudah menyelesaikan pembayaran?</b></p>
                <a href="Home" style="text-decoration: none;">
                    <button class="button-konfirmasi">Konfirmasi
                        pembayaran
                    </button>
                </a>
                
            </div>
        </div>

        <div class="contact-us mt-5 md-5">
            <p>Apabila membutuhkan informasi lain silahkan menghubungi customer service kami di : </p>
            <div class="contact">
                <p> <i class="fa-solid fa-envelope"></i>&nbsp; <b>xxxxx@gmail.com</b></p>
                <p> <i class="fa-solid fa-phone"></i> &nbsp; <b>+62-xx-xxxx-xxxx</b></p>
            </div>
            <p>Mohon dilakukan pengecekan juga di SPAM email Anda.</p>
            <p>Terima kasih.</p>
        </div>
    </div>

    <!-- script boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <!-- script font awelsome -->
    <script src="https://kit.fontawesome.com/90ac0be598.js" crossorigin="anonymous"></script>
</body>

</html>