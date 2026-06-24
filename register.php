<?php
session_start();
require 'koneksi.php';

if (isset($_POST['register'])) {
    $nama = mysql_real_escape_string($_POST['nama']);
    $email = mysql_real_escape_string($_POST['email']);
    $no_hp = mysql_real_escape_string($_POST['no_hp']);
    $password = md5($_POST['password']);

    $cek = mysql_query("SELECT * FROM users WHERE email='$email'");
    if (mysql_num_rows($cek) > 0) {
        $error = "Email sudah terdaftar!";
    } else {
        $insert = "INSERT INTO users (nama, email, password, no_hp) VALUES ('$nama', '$email', '$password', '$no_hp')";
        if (mysql_query($insert)) {
            $success = "Pendaftaran berhasil! Silakan login.";
        } else {
            $error = "Gagal mendaftar. Silakan coba lagi.";
        }
    }
}
$title = "Registrasi Pengguna";
include 'header.php';
?>

<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" style="box-shadow: 0 10px 20px rgba(0,0,0,0.1); border-radius: 10px;">
                <div class="panel-heading" style="background: linear-gradient(135deg, #00b4d8, #0077b6); color: white; border-radius: 10px 10px 0 0;">
                    <h3 class="panel-title text-center" style="padding: 10px 0; font-weight: 700;">Buat Akun Baru</h3>
                </div>
                <div class="panel-body" style="padding: 30px;">
                    <?php if(isset($error)) { echo '<div class="alert alert-danger">'.$error.'</div>'; } ?>
                    <?php if(isset($success)) { echo '<div class="alert alert-success">'.$success.' <a href="login_user">Login di sini</a></div>'; } ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" required placeholder="Masukkan nama...">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" required placeholder="Masukkan email...">
                        </div>
                        <div class="form-group">
                            <label>Nomor HP/WhatsApp</label>
                            <input type="text" name="no_hp" class="form-control" required placeholder="Masukkan no HP...">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required placeholder="Buat password...">
                        </div>
                        <button type="submit" name="register" class="btn-premium" style="width: 100%; justify-content: center; margin-top: 10px;">Mendaftar</button>
                    </form>
                    <p class="text-center" style="margin-top: 20px;">Sudah punya akun? <a href="login_user">Login di sini</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
