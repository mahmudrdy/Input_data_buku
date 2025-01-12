<?php
include("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari form
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $query = "INSERT INTO perpustakaan (id, judul, penulis, penerbit, tahun_terbit)VALUES ('$id','$judul','$penulis','$penerbit', '$tahun_terbit')";
    $sql = $conn->query($query);
    if(!$sql){
        die('Eror: '. mysqli_error($conn));
    }else{
        header("Location: buku.php");
    }
}
?>
