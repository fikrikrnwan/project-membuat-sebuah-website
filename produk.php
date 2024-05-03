<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor Club Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to Our Motor Club Shop</h1>
            <nav>
                <ul>
                <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="vision-mission.php">Visi Misi</a></li>
                    <li><a href="produk.php">Produk Club</a></li>
                    <li><a href="add_member.php">Tambahkan Member</a></li>
                    <li><a href="klien.php">Klien Club</a></li>
                    <li><a href="members.php">Data Anggota</a></li>
                    <li><a href="articles.php">Artikel<a/a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="products">
        <div class="container">
            <h2>Our Products</h2>
            <div class="product">        
                <img src=picture/product2.jpg>
                <h3>Motor Club T-Shirt</h3>
                <p>Rp. 300.000</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src=picture/product1.jpg>
                <h3>Helm</h3>
                <p>Rp. 200.000</p>
                <button>Add to Cart</button>
            </div>
            <!-- Tambahkan produk lainnya di sini -->
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Club Motor. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>