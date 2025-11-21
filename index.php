<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        header {
            background: #2a7ae4;
            padding: 15px;
            color: white;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        a {
            text-decoration: none;
            background: #2a7ae4;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<header>
    <h1>Selamat Datang di Aplikasi Saya</h1>
</header>

<div class="container">
    <p>Ini adalah halaman index sederhana menggunakan PHP.</p>

    <?php
        echo "<p>Waktu saat ini: <b>" . date("d-m-Y H:i:s") . "</b></p>";
    ?>

    <br>
    <a href="halaman_lain.php">Ke Halaman Lain</a>
</div>

</body>
</html>
