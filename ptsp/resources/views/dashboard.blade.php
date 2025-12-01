<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTSP Kesehatan</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">PTSP Kesehatan</div>
            <ul class="nav-menu">
                <li><a href="#visi">Visi & Misi</a></li>
                <li><a href="#microservices">Microservices</a></li>
                <li><a href="#syarat">Syarat Perizinan</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-left">
                <img src="{{ asset('images/v58_990.png') }}" class="hero-image">
            </div>
            <div class="hero-right">
                <h2>Layanan Perizinan Kesehatan Terintegrasi,<br>Akses seluruh layanan kesehatan dalam satu sistem yang efektif dan terpercaya.</h2>
            </div>
        </div>
    </section>

    <!-- VISI MISI -->
    <section id="visi" class="section">
        <h2 class="section-title">Visi & Misi</h2>

        <div class="visi-misi-grid">
            <div class="card">
                <h3>Visi</h3>
                <p>Mewujudkan layanan perizinan kesehatan terpadu yang cepat, efektif, dan terpercaya.</p>
            </div>

            <div class="card">
                <h3>Misi</h3>
                <ul>
                    <li>Meningkatkan kualitas layanan kesehatan.</li>
                    <li>Mempermudah proses administrasi perizinan.</li>
                    <li>Mempercepat integrasi data kesehatan.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- MICROSERVICES -->
    <section id="microservices" class="section" style="background-color:#CBE3FF;">
        <h2 class="section-title">Microservices</h2>

        <a href="http://localhost:8001" class="service-link" style="color:black;text-decoration:none;">
        <div class="service-grid">
            <div class="service-card">
                <h3>Autentikasi</h3>
                <p>Sistem login dan manajemen pengguna secara aman.</p>
            </div>
        </a>

        <a href="http://localhost:8001" class="service-link" style="color:black;text-decoration:none;">
            <div class="service-card">
                <h3>PTSP</h3>
                <p>Layanan utama untuk pengelolaan dan pemrosesan perizinan.</p>
            </div>
        </a>    

        <a href="http://localhost:8001" class="service-link" style="color:black;text-decoration:none;">
            <div class="service-card">
                <h3>Database</h3>
                <p>Integrasi data untuk semua keperluan perizinan kesehatan.</p>
            </div>
        </a>
        </div>
    </section>

    <!-- SYARAT PERIZINAN -->
    <section id="syarat" class="section">
        <h2 class="section-title">Syarat Perizinan</h2>

        <div class="syarat-list">
            <div class="syarat-item">
                <h3>Dokumen Identitas</h3>
                <p>KTP, KK, atau identitas resmi lain.</p>
            </div>

            <div class="syarat-item">
                <h3>Berkas Operasional</h3>
                <p>Dokumen persyaratan operasional fasilitas kesehatan.</p>
            </div>

            <div class="syarat-item">
                <h3>Surat Permohonan</h3>
                <p>Surat permohonan resmi dari pemohon.</p>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="section" style="background-color:#CBE3FF;">
        <h2 class="section-title">Contact</h2>

        <div class="contact-box">
            <p>Email: ptspkesehatan@example.com</p>
            <p>Telepon: (021) 12345678</p>
            <p>Alamat: Jl. Kesehatan No. 10, Jakarta</p>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>© 2025 PTSP Kesehatan — All Rights Reserved.</p>
    </footer>

</body>
</html>
