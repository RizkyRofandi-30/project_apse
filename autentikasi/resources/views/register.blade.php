<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; }
        body { font-size: 14px; margin: 0; padding: 0; font-family: Inter, sans-serif; }

        .v58_1869 {
            width: 100%;
            height: 100vh;
            background: #fff;
            position: relative;
            overflow: hidden;
        }

        .v58_1928 {
            width: 50%;
            height: 100%;
            background: url('{{ asset("images/v58_1928.png") }}') center/cover no-repeat;
            position: absolute;
            left: 0;
            top: 0;
        }

        .v58_1922 {
    width: 100%;
    height: 100%;
    background: url('{{ asset("images/v58_1922.png") }}') center/contain no-repeat;
    position: absolute;
    top: 0; /* naikkan lagi ke atas */
}


        .v58_1929 {
            width: 50%;
            height: 100%;
            background: url('{{ asset("images/v58_1929.png") }}') center/cover no-repeat;
            position: absolute;
            right: 0;
            top: 0;
            padding: 40px;
        }

        .v58_1931 {
            width: 80%;
            height: 90%;
            background: #1e3557;
            margin: auto;
            margin-top: 30px;
            border-radius: 20px;
            position: relative;
            padding: 40px;
        }

        .v58_1955 {
            font-size: 32px;
            font-family: Ubuntu;
            color: white;
        }

        .v58_1956 {
            font-size: 16px;
            margin-top: 5px;
            color: white;
        }

        /* Form container */
        .form-block {
            width: 100%;
            margin-top: 30px;
            position: relative;
        }

        .form-label {
            color: white;
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
        }

        .form-input {
            width: 100%;
            height: 45px;
            background: #fefefe;
            border-radius: 10px;
            padding-left: 55px;
            font-size: 15px;
            border: none;
            outline: none;
        }

        .icon-box {
            width: 43px;
            height: 43px;
            background: #1e3557;
            border-radius: 10px;
            position: absolute;
            top: 32px;
            left: 0;
        }

        .icon-box img {
            width: 30px;
            height: 30px;
            margin: 6px;
        }

        /* Button */
        .register-btn {
            width: 200px;
            height: 50px;
            background: #f68700;
            border-radius: 20px;
            position: absolute;
            left: 50%;
            bottom: 40px;
            transform: translateX(-50%);
            text-align: center;
            line-height: 50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            cursor: pointer;
        }
    </style>

</head>

<body>

<div class="v58_1869">

    <div class="v58_1928">
        <div class="v58_1922"></div>
    </div>

    <div class="v58_1929">
        <div class="v58_1931">

            <!-- Title -->
            <div style="justify-content:center;align-items:center;display:flex;flex-direction:column;">
                <div class="v58_1955">Selamat Datang</div>
                <div class="v58_1956">Silahkan Lakukan Pendaftaran</div>
            </div>

            <!-- FORM -->
            <form method="POST">
                @csrf

                <!-- PASSWORD -->
                <div class="form-block">
                    <label class="form-label">Password</label>
                    <div class="icon-box">
                        <img src="{{ asset('images/v179_879.png') }}">
                    </div>
                    <input type="password" name="password" class="form-input" placeholder="Masukkan Password">
                </div>

                <!-- NIK -->
                <div class="form-block">
                    <label class="form-label">NIK</label>
                    <div class="icon-box">
                        <img src="{{ asset('images/v58_2005.png') }}">
                    </div>
                    <input type="text" name="nik" class="form-input" placeholder="Masukkan NIK">
                </div>

                <!-- EMAIL -->
                <div class="form-block">
                    <label class="form-label">Email</label>
                    <div class="icon-box">
                        <img src="{{ asset('images/v58_2032.png') }}">
                    </div>
                    <input type="email" name="email" class="form-input" placeholder="Masukkan Email">
                </div>

                <!-- NAMA -->
                <div class="form-block">
                    <label class="form-label">Nama</label>
                    <div class="icon-box">
                        <img src="{{ asset('images/v58_2023.png') }}">
                    </div>
                    <input type="text" name="nama" class="form-input" placeholder="Masukkan Nama">
                </div>

                <!-- NO TELP -->
                <div class="form-block">
                    <label class="form-label">No. Telp</label>
                    <div class="icon-box">
                        <img src="{{ asset('images/v58_2034.png') }}">
                    </div>
                    <input type="text" name="telepon" class="form-input" placeholder="Masukkan No Telp">
                </div>

                <button type="submit" class="register-btn">Daftar</button>

            </form>

        </div>
    </div>

</div>

</body>
</html>
