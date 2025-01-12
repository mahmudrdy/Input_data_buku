<?php 
    include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="container">
            <div>
                <h1>Data buku</h1>
            </div>
            <form action="proses.php" method="post">
                <label for="">Judul</label>
                <input type="text" name="judul">
                <label for="">Penulis</label>
                <input type="text" name="penulis">
                <label for="">Penerbit</label>
                <input type="text" name="penerbit">
                <label for="">Tahun terbit</label>
                <input type="number" name="tahun_terbit">
                <button type="submit">Kirim</button>
            </form>
        </div>
    </section>
</body>
</html>