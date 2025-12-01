<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTSP MedLicense</title>

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: Ubuntu, Arial, sans-serif;
            background: #eef7f0;
            overflow-x: hidden;
        }

        /* NAVBAR */
        .navbar {
            background: #2f9e44;
            padding: 12px 40px;
            display: flex;
            justify-content: space-between;
            color: white;
            font-weight: bold;
            height:7vh;
            font-size: 16px;
            position: relative;
            z-index: 100;
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        }
        .navbar-left, .navbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .navbar img { width: 55px; }

        /* HERO */
        .hero {
            width: 100%;
            height: 93vh;
            position: relative;
            overflow: hidden;
            background: linear-gradient(180deg, #d8f5dd 0%, #fafffa 70%);
        }

        /* ORNAMEN */
        .hero::before {
            content: "";
            position: absolute;
            width: 650px;
            height: 650px;
            top: -160px;
            left: -100px;
            border-radius: 50%;
            background: rgba(120, 220, 150, 0.35);
            filter: blur(80px);
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 600px;
            height: 600px;
            bottom: -180px;
            right: -160px;
            border-radius: 50%;
            background: rgba(90, 180, 120, 0.32);
            filter: blur(90px);
        }

        /* ORNAMEN GRADASI LEWAT DIAGONAL */
        .soft-glow {
            position: absolute;
            width: 800px;
            height: 800px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(25deg);
            background: linear-gradient(135deg, rgba(100,200,130,0.18), rgba(255,255,255,0));
            filter: blur(40px);
            opacity: 0.5;
        }

        /* GAMBAR ORANG — POSISI TETAP SESUAI PERMINTAAN */
        .hero-person {
            position: absolute;
            left: 380px;
            width: 320px;
            top: 100px;
            z-index: 5;
            pointer-events: none;
            transform: scaleX(-1);
            filter: drop-shadow(0 12px 15px rgba(0,0,0,0.18));
        }

        /* KOTAK TEKS */
        .hero-text-box {
            width: 600px;
            position: absolute;
            right: 200px;
            top: 220px;
            z-index: 10;
            padding: 20px 25px;
            border-radius: 18px;
            background: rgba(255,255,255,0.7);
            backdrop-filter: blur(8px);
            box-shadow: 0 4px 16px rgba(0,0,0,0.1);
        }

        .hero-text {
            font-size: 30px;
            font-weight: bold;
            text-align: right;
            line-height: 1.35;
            color: #155c2e;
        }

        /* TABLE SECTION */
        .table-section {
    width: 100%;
    background: #b8e6c1;
    padding: 150px 0 200px 0; /* ⬅ TAMBAH tinggi */
    position: relative;
}

.content-card {
    width: 90%;
    max-width: 1200px;
    background: white;
    margin: -90px auto 40px auto; /* ⬅ geser lebih turun biar seimbang */
    border-radius: 22px;
    padding: 50px; /* ⬅ tambah padding agar tabel tidak menempel */
    box-shadow: 0 6px 18px rgba(0,0,0,0.12);
    position: relative;
    z-index: 20;
}


        .content-title {
            text-align: center;
            font-size: 17px;
            font-weight: bold;
            margin-bottom: 25px;
            color: #155c2e;
        }

        .button-area { text-align: right; margin-bottom: 15px; }

        .btn {
            background: #ff8c00;
            color: white;
            border: none;
            padding: 10px 18px;
            margin-left: 10px;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0,0,0,0.18);
            transition: 0.2s;
        }
        .btn:hover { transform: translateY(-2px); }

        table { width: 100%; border-collapse: collapse; }
        thead { background: #72c472; color: white; }

        th, td {
            padding: 12px;
            border: 1px solid #cdeccc;
            text-align: center;
            font-size: 14px;
        }

        /* FOOTER */
        .footer {
            background: #2f9e44;
            padding: 22px 50px;
            color: white;
            font-size: 13px;
            box-shadow: 0 -3px 10px rgba(0,0,0,0.15);
        }
        .footer-flex {
            display: flex;
            justify-content: space-between;
        }
    </style>

</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="navbar-left">
        <img src="/images/logo.png" alt="Logo">
        <span>PTSP Kesehatan</span>
    </div>
    <div class="navbar-right">
        <span>Permohonan Saya</span>
        <span>Pengguna</span>
    </div>
</div>

<!-- HERO -->
<div class="hero">
    <div class="soft-glow"></div>

    <img src="/images/v58_1560.png" class="hero-person">

    <div class="hero-text-box">
        <div class="hero-text">
            Nikmati kemudahan pengajuan PERIZINAN KESEHATAN DENGAN LAYANAN 
            PTSP DIGITAL YANG AMAN, CEPAT, DAN TERINTEGRASI UNTUK 
            MEMENUHI KEBUTUHAN ANDA
        </div>
    </div>
</div>

<!-- TABEL -->
<div class="table-section">
<div class="content-card">
    <div class="content-title">
        Proses pengajuan perizinan kini lebih mudah. Ajukan permohonan Anda di sini.
    </div>

    <div class="button-area">
        <button class="btn">Tambah Permohonan</button>
        <button class="btn">Perpanjangan Izin</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Izin</th>
                <th>Tanggal Pengajuan</th>
                <th>Nama Pemohon</th>
                <th>Status</th>
                <th>File</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="6">Belum ada data</td>
            </tr>
        </tbody>
    </table>
</div>
</div>

<!-- FOOTER -->
<div class="footer">
    <div class="footer-flex">
        <div>
            Customer Service<br>
            📞 +62 812-3456-7890
        </div>
        <div>
            © 2025 Pelayanan Terpadu Sektor Kesehatan
        </div>
    </div>
</div>

</body>
</html>
