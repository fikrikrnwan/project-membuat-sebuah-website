<?php
session_start();

// Cek apakah pengguna sudah login atau belum
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    // Jika belum login, redirect ke halaman login
    header("Location: admin_login.php");
    exit;
}

// Proses logout jika tombol logout diklik
if(isset($_POST['logout'])){
    session_destroy(); // Hapus semua data sesi
    header("Location: admin_login.php"); // Redirect ke halaman login
    exit;
}

// Proses artikel jika form dikirim
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Proses simpan artikel (contoh sederhana, seharusnya menggunakan database)
    $article_content = $_POST['content'];
    file_put_contents('article.html', $article_content); // Menyimpan konten artikel ke file
    $success_message = "Artikel berhasil diperbarui";
}

// Mendapatkan konten artikel yang tersimpan
$article_content = file_get_contents('article.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
        textarea {
            width: 100%;
            height: 300px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Welcome to Admin Panel</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <textarea name="content" class="form-control" rows="10"><?php echo $article_content; ?></textarea>
            <button type="submit" class="btn btn-primary mt-3">Save Article</button>
        </form>
        <?php if(isset($success_message)) { echo "<div class='alert alert-success mt-3'>$success_message</div>"; } ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <button type="submit" name="logout" class="btn btn-danger mt-3">Logout</button>
        </form>
        <a href="index.php" class="btn btn-secondary mt-3">Go to Website</a>
    </div>
</body>
</html>
