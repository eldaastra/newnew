<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Selamat Datang di Aplikasi Saya</h1>
</header>

<div class="container">
    <p>haiiii ini adalah halaman utama yang sering aku kunjungi, btw kamu apa kabar? aku senang kamu berkunjung kesini.</p>
    <p>salam kenal yaa, aku elsss.</p>

    <?php
        echo "<p>Waktu saat ini: <b>" . date("d-m-Y H:i:s") . "</b></p>";
    ?>

    <br>
    <a href="halaman_lain.php">Ke Halaman Lain</a>
</div>

</body>
</html>
