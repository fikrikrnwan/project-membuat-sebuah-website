<?php
session_start();

// Cek apakah pengguna sudah login atau belum
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    // Redirect ke halaman admin jika sudah login
    header("Location: admin_panel.php");
    exit;
}

// Proses form login jika form dikirim
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validasi username dan password (contoh sederhana, seharusnya menggunakan database)
    $username = "admin";
    $password = "admin123";

    if($_POST['username'] == $username && $_POST['password'] == $password){
        // Jika username dan password benar, set session dan redirect ke halaman admin
        $_SESSION['loggedin'] = true;
        header("Location: admin_panel.php");
        exit;
    } else {
        // Jika username atau password salah, tampilkan pesan error
        $error = "Username or password is incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Admin Login</div>
                    <div class="card-body">
                        <?php if(isset($error)) { ?>
                            <div class="alert alert-danger" role="alert"><?php echo $error; ?></div>
                        <?php } ?>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" id="username" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
