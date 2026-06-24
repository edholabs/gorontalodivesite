<?php
session_start();
require 'koneksi.php';

if (isset($_POST['login'])) {
    $email = mysql_real_escape_string($_POST['email']);
    $password = md5($_POST['password']); // Using md5 for simplicity in this legacy system

    $cek = mysql_query("SELECT * FROM users WHERE email='$email' AND password='$password'");
    if (mysql_num_rows($cek) > 0) {
        $data = mysql_fetch_array($cek);
        $_SESSION['user_id'] = $data['id_user'];
        $_SESSION['user_nama'] = $data['nama'];
        header("Location: produk");
        exit();
    } else {
        $error = "Email atau Password salah!";
    }
}
$title = "Login Pengguna";
include 'header.php';
?>

<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" style="box-shadow: 0 10px 20px rgba(0,0,0,0.1); border-radius: 10px;">
                <div class="panel-heading" style="background: linear-gradient(135deg, #00b4d8, #0077b6); color: white; border-radius: 10px 10px 0 0;">
                    <h3 class="panel-title text-center" style="padding: 10px 0; font-weight: 700;">Login Pelanggan</h3>
                </div>
                <div class="panel-body" style="padding: 30px;">
                    <?php if(isset($error)) { echo '<div class="alert alert-danger">'.$error.'</div>'; } ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" required placeholder="Masukkan email...">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required placeholder="Masukkan password...">
                        </div>
                        <button type="submit" name="login" class="btn-premium" style="width: 100%; justify-content: center; margin-top: 10px;">Login</button>
                    </form>
                    <p class="text-center" style="margin-top: 20px;">Belum punya akun? <a href="register">Daftar sekarang</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
