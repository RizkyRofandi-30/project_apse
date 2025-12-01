<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthyGate</title>

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: Ubuntu, Arial, sans-serif;
            background: #ffeaea; /* dari #eef7f0 */
            overflow-x: hidden;
        }

        /* NAVBAR */
        .navbar {
            background: #b30000; /* dari #2f9e44 */
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
            background: linear-gradient(180deg, #ffd6d6 0%, #fff7f7 70%); /* dari hijau muda */
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
            background: rgba(255, 120, 120, 0.35); /* dari hijau glow */
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
            background: rgba(255, 70, 70, 0.32); /* dari hijau muda */
            filter: blur(90px);
        }

        /* SOFT GLOW DIAGONAL */
        .soft-glow {
            position: absolute;
            width: 800px;
            height: 800px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(25deg);
            background: linear-gradient(135deg, rgba(255,100,100,0.18), rgba(255,255,255,0));
            filter: blur(40px);
            opacity: 0.5;
        }

        /* PERSON IMAGE */
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

        /* TEXT BOX */
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
            color: #7a0000; /* dari hijau tua */
        }

        /* TABLE SECTION */
        .table-section {
            width: 100%;
            background: #ffb5b5; /* dari #b8e6c1 */
            padding: 150px 0 200px 0;
            position: relative;
        }

        .content-card {
            width: 90%;
            max-width: 1200px;
            background: white;
            margin: -90px auto 40px auto;
            border-radius: 22px;
            padding: 50px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.12);
            position: relative;
            z-index: 20;
        }

        .content-title {
            text-align: center;
            font-size: 17px;
            font-weight: bold;
            margin-bottom: 25px;
            color: #7a0000; /* dari hijau tua */
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

        thead { 
            background: #e63939; /* dari hijau header */
            color: white; 
        }

        th, td {
            padding: 12px;
            border: 1px solid #ffcccc; /* dari hijau border soft */
            text-align: center;
            font-size: 14px;
        }

        /* FOOTER */
        .footer {
            background: #b30000; /* dari hijau tua */
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
        <span>HealthyGate</span>
    </div>
    <div class="navbar-right">
        <span>Layanan</span>
        <span>Pengguna</span>
    </div>
</div>

<!-- HERO -->
<div class="hero">
    <div class="soft-glow"></div>

    <img src="/images/v58_1560.png" class="hero-person">

    <div class="hero-text-box">
        <div class="hero-text">
            Nikmati kemudahan pengajuan PERIZINAN KESEHATAN DENGAN LAYANAN PTSP DIGITAL YANG AMAN, CEPAT, DAN TERINTEGRASI UNTUK MEMENUHI KEBUTUHAN ANDA
        </div>
    </div>
</div>

<!-- TABLE -->
<div class="table-section">
<div class="content-card">
    <div class="content-title">
        Pilih layanan kesehatan yang ingin Anda akses.
    </div>

    <div class="button-area">
        <button class="btn">Tambah Permohonan</button>
        <button class="btn">Perpanjangan Layanan</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Layanan</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Detail</th>
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
            © 2025 HealthyGate Digital Health Service
        </div>
    </div>
</div>

</body>
</html>
