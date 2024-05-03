<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Member List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tempat Tinggal</th>
                    <th>Nomor HP</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Koneksi ke database
                $servername = "localhost";
                $username = "root"; // Ganti dengan username MySQL Anda
                $password = ""; // Ganti dengan password MySQL Anda
                $dbname = "dbproject.php"; // Ganti dengan nama database Anda

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Periksa koneksi
                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                // Ambil data anggota dari database
                $sql = "SELECT nama, email, tempat_tinggal, nomor_hp FROM members";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data dari setiap baris
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["nama"]. "</td><td>" . $row["email"]. "</td><td>" . $row["tempat_tinggal"]. "</td><td>" . $row["nomor_hp"]. "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data anggota</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
