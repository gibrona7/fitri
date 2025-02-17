<?php
include 'database.php';


$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">📚 Data Produk</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Ukuran</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['nama_barang']}</td>
                            <td>{$row['harga']}</td>
                            <td>{$row['ukuran']}</td>
                             <td>{$row['stok']}</td>
                          </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">⬅️ Kembali</a>
    </div>
</body>

</html>