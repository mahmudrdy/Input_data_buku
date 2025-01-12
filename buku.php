<?php 
    include("koneksi.php");
    $query = "SELECT * FROM perpustakaan";
    $sql = $conn->query($query);
    $no = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Table</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding:20px;
            background-color:rgb(197, 224, 226);
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(24, 70, 197, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
            font-size: 15px;
            background-color: red;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table thead {
            background-color:rgba(126, 83, 235, 0.75);
            color: #fff;
        }

        table th, table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            padding: 6px 12px;
            background-color:rgb(54, 203, 230);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color:rgb(0, 98, 255);
        }
        a {
            text-decoration: none;
            padding: 5px;
            background-color: red;
            border-radius: 2px;
            color: white;
        }
        .data {
            padding: 8px;
            top: 10px;
            color: white;
            background-color: #007bff;
            border-radius: 2px;
            box-shadow: 0 4px 6px rgba(6, 249, 144, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Table</h1>
        <table>
            <a href="index.php" class="data">Input Data</a>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun terbit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($result = mysqli_fetch_assoc($sql)){
                      $no++
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $result['judul'];?></td>
                    <td><?php echo $result['penulis'];?></td>
                    <td><?php echo $result['penerbit'];?></td>
                    <td><?php echo $result['tahun_terbit'];?></td>
                    <td>
                      <a href="edit.php?id=<?php echo $result['id']; ?>">Edit</a>
                      <a href="delete.php?hapus=<?php echo $result['id']; ?>">Hapus</a>

                    </td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
