<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Member</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Add New Member</h2>
        <form action="add_member_process.php" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tempat_tinggal">Tempat Tinggal:</label>
                <input type="text" id="tempat_tinggal" name="tempat_tinggal" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nomor_hp">Nomor HP:</label>
                <input type="text" id="nomor_hp" name="nomor_hp" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Anggota</button>
        </form>
    </div>
</body>
</html>
