<!DOCTYPE html> <html> <head> <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet" /> <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" /> <link href="https://fonts.googleapis.com/css?family=Instrument+Sans&display=swap" rel="stylesheet" /> <link rel="stylesheet" href="css/main.css" /> <title>Login</title> <style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Inter, sans-serif;
    background: #fff;
    height: 100vh;
}

/* === LAYOUT UTAMA 50–50 === */
.container {
    display: flex;
    width: 100%;
    height: 100vh; /* full layar */
}

/* KIRI */
.left {
    flex: 1; /* otomatis 50% */
    height: 100%;
    overflow: hidden;
}

.left img {
    width: 100%;
    height: 100%;
    object-fit: cover;   /* gambar fullscreen tanpa kosong */
}

/* KANAN */
.right {
    flex: 1; /* otomatis 50% */
    height: 100%;
    background: url("../images/v58_2402.png") center/cover no-repeat;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* CARD LOGIN */
.login-card {
    background: #1E3557;
    width: 75%;  /* proporsional biar rapi */
    max-width: 480px;
    padding: 35px 25px;
    border-radius: 20px;
}

/* Title */
.title {
    color: #fff;
    font-family: Ubuntu;
    font-size: 32px;
}

.subtitle {
    color: #fff;
    font-family: Ubuntu;
    font-size: 16px;
    margin-top: 5px;
}

.desc {
    color: #fff;
    font-size: 20px;
    text-align: center;
    margin: 20px 0 30px;
}

/* INPUT */
.input-group {
    margin-bottom: 20px;
}

.input-group label {
    color: #fff;
    font-size: 16px;
}

.input-box {
    margin-top: 6px;
    background: #fff;
    height: 45px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    padding: 0 10px;
    position: relative;
}

.input-box input {
    width: 100%;
    font-size: 15px;
    border: none;
    outline: none;
    margin-left: 50px;
}

/* ICONS */
.icon {
    width: 35px;
    height: 35px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    position: absolute;
    left: 10px;
}

.email-icon {
    background-image: url("../images/v58_2430.png");
}

.pass-icon {
    background-image: url("../images/v58_2484.png");
}

.eye-icon {
    background-image: url("../images/v58_2479.png");
    right: 10px;
    left: auto;
    width: 22px;
    height: 22px;
    opacity: .7;
    cursor: pointer;
}

/* Lupa Password */
.forgot {
    color: #fff;
    font-size: 15px;
    float: right;
    margin-top: -10px;
}

/* BUTTON */
.btn-login {
    width: 100%;
    height: 46px;
    border-radius: 20px;
    background: #F68700;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    border: none;
    margin-top: 40px;
    cursor: pointer;
}

/* REGISTER */
.register {
    margin-top: 20px;
    text-align: center;
    color: #fff;
}

.register a {
    font-weight: bold;
    margin-left: 5px;
    cursor: pointer;
}
</style>
 </head> <body> <div class="container"> <!-- Bagian kiri --> <div class="left"> <img src="images/v58_2447.png" alt="Login Image"/> </div> <!-- Bagian kanan --> <div class="right"> <div class="login-card"> <div class="title-box" style="display:flex;flex-direction:column;align-items:center;"> <h1 class="title">Selamat Datang</h1> <p class="subtitle">Silahkan Lakukan Pendaftaran</p> </div> <p class="desc">Silahkan Login Menggunakan Email Yang Sudah Terdaftar</p> <div class="input-group"> <label>Email</label> <div class="input-box"> <span class="icon email-icon"></span> <input type="text" placeholder="Masukkan Email"> </div> </div> <div class="input-group"> <label>Password</label> <div class="input-box"> <span class="icon pass-icon"></span> <input type="password" placeholder="Masukkan Password"> <span class="icon eye-icon"></span> </div> </div> <a class="forgot">Lupa Password?</a> <button class="btn-login">Masuk</button> <div class="register"> <span>Belum punya akun?</span> <a>Daftar Sekarang!</a> </div> </div> </div> </div> </body> </html> 