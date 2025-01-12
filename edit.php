<?php
include("koneksi.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM perpustakaan WHERE id='$id'";
    $result = $conn->query($query);
    $data = $result->fetch_assoc();
}

if(isset($_POST['update'])){
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $query = "UPDATE perpustakaan SET judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit' WHERE id='$id'";
    if($conn->query($query)){
        header("Location: buku.php"); // Redirect kembali ke tabel
    } else {
        echo "Gagal mengupdate data!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style>
      body {
          font-family: Cambria, Cochin, Georgia,;
          margin: 5000;
          padding: 5000;
          background-color: #c8e9ff;
          color: #1d1c1c;
      }
      
      .container {
          max-width: 500px;
          margin: 70px auto;
          background: #f8fafa;
          padding: 15px;
          box-shadow: 0 4px 6px rgba(211, 199, 199, 0.1);
          border-radius: 10px;
      }
      h1 {
          text-align: center;
          color: #3c2bd6;
          margin-bottom: 15px;
      }
      
      form {
          width: 100%;
          display: flex;
          flex-direction: column;
          gap: 10px;
      }
      
      label {
          text-align: center;
          font-size: 16px;
          color: #080808;
      }
      
      input[type="text"],
      input[type="number"] {
          padding: 10px;
          border: 3px solid #ccc;
          border-radius: 20px;
          font-size: 16px;
          outline: 10px;
          transition: border-color 0.3s;
      }
      
      input[type="text"]:focus {
          border-color: #007bff;
      }
      
      button {
          padding: 20px 30px;
          background-color: #0573da;
          color: white;
          border: none;
          border-radius: 20px;
          font-size: 16px;
          cursor: pointer;
          transition: background-color 0.3s;
      }
      
      button:hover {
          background-color: #f3f4f5;
      }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Data Buku</h1>
        <form action="" method="POST">
            <label for="judul">Judul</label>
            <input type="text" name="judul" value="<?php echo $data['judul']; ?>" required><br>
            
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" value="<?php echo $data['penulis']; ?>" required><br>
            
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" value="<?php echo $data['penerbit']; ?>" required><br>
            
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" value="<?php echo $data['tahun_terbit']; ?>" required><br>
            
            <button type="submit" name="update" class="btn">Update</button>
        </form>
    </div>
</body>
</html>
