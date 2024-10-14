<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Daftar Buku</h2>
    
    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query untuk mengambil data buku
            include 'db.php';
            $sql = "SELECT * FROM buku";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Menampilkan setiap baris data
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['judul'] . "</td>
                            <td>" . $row['pengarang'] . "</td>
                            <td>" . $row['penerbit'] . "</td>
                            <td>" . $row['tahun_terbit'] . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='text-center'>Tidak ada data buku</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
