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
            <h1>Welcome to Our Motor Club Contact</h1>
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
        

    <!-- Petunjuk Maps -->
    <script>
        function initMap() {
            var location = {lat: 3.5946, lng: 98.6722}; // Koordinat Medan, Sumatera Utara
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    <!-- Ganti YOUR_API_KEY dengan kunci API Google Maps Anda -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Motor - Contact</title>
    <style>
        /* Gaya CSS Anda */
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>

    <section id="contact-info">
        <h2>Contact Information</h2>
        <p><strong>Address:</strong> Jalan Contoh No. 123, Medan, Sumatera Utara</p>
        <p><strong>Phone:</strong> +62 812-3456-7890</p>
        <p><strong>Fax:</strong> +62 61-1234-5678</p>
        <p><strong>Email:</strong> info@clubmotor.com</p>
    </section>

    <section id="map">
        <!-- Petunjuk Maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.2432639988943!2d98.6676849148704!3d3.5873723973893667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3040327b8b0f6e8b%3A0x4b58584a2ae6e9d!2sMedan%2C%20Sumatera%20Utara%2C%20Indonesia!5e0!3m2!1sen!2s!4v1620437353371!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <footer>
        <p>&copy; 2024 Club Motor. All rights reserved.</p>
    </footer>
</body>
</html>

</body>
</html>

</div>
    </header>
    <footer>
    <section id="contact">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Club Motor. All rights reserved.</p>
        </div>
    </footer>