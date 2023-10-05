<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form dengan POST</title>
</head>
<body>
    <h1>Buku Tamu</h1>
    Komentar dan saran sangat kami butuhkan untuk meningkatkan untuk kualitas sitis kami.
    <hr>
    <form action="proses_bukutamu.php" method="post">
        <pre>
            nama anda : <input type="text" name="nama" size="25" maxlength="50">
            Email address : <input type="text" name="email" size="25" maxlength="25">
            Komentar : <textarea name="komentar" cols="40" rows="5"></textarea>
            <input type="submit" value="kirim">
            <input type="reset" value="ulangi">
        </pre>
    </form>
</body>
</html>