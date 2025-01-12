<?php 
    include("koneksi.php");
    if(isset($_GET['hapus'])){
        $id = $_GET['hapus'];
        $query = "DELETE FROM perpustakaan WHERE `id` = '$id'";
        $sql = mysqli_query($conn, $query);
        if(!$sql){
            die("Eror pada query: ". mysqli_error($conn));
        }else {
            header("Location: buku.php");
        }
    } 
?>