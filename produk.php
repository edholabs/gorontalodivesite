<?php
session_start();
require 'koneksi.php';

// Menambahkan ke keranjang
if (isset($_GET['add'])) {
    $id_produk = (int)$_GET['add'];
    if (isset($_SESSION['cart'][$id_produk])) {
        $_SESSION['cart'][$id_produk]++;
    } else {
        $_SESSION['cart'][$id_produk] = 1;
    }
    header("Location: keranjang");
    exit();
}

$title = "Katalog Sewa & Tiket";
include 'header.php';
?>

<!-- Banner Section -->
<section style="background: url('img/bg-2.jpg') center/cover no-repeat; height: 300px; display: flex; align-items: center; justify-content: center; position: relative;">
    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.5);"></div>
    <div style="position: relative; z-index: 1; text-align: center; color: white;">
        <h1 style="font-weight: 800; font-size: 3em; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Gorontalo Dive Shop</h1>
        <p style="font-size: 1.2em;">Sewa Alat Selam & Booking Tiket Perjalanan Anda</p>
    </div>
</section>

<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="row">
        <?php
        $query = mysql_query("SELECT * FROM products ORDER BY id_produk DESC");
        while ($p = mysql_fetch_array($query)) {
            $img = $p['gambar'] != "" ? "img/".$p['gambar'] : "img/bg-1.jpg";
        ?>
        <div class="col-md-4 col-sm-6" style="margin-bottom: 30px;">
            <div class="panel panel-default" style="border: none; border-radius: 15px; box-shadow: 0 10px 20px rgba(0,0,0,0.05); overflow: hidden; transition: transform 0.3s ease;">
                <div style="height: 200px; background: url('<?php echo $img; ?>') center/cover;"></div>
                <div class="panel-body" style="padding: 20px;">
                    <h3 style="margin-top: 0; font-weight: 700; color: #0077b6; font-size: 1.3em;"><?php echo $p['nama_produk']; ?></h3>
                    <p style="color: #666; font-size: 0.9em; height: 40px; overflow: hidden;"><?php echo $p['deskripsi']; ?></p>
                    <h4 style="color: #ff5050; font-weight: 800; margin: 15px 0;">Rp <?php echo number_format($p['harga'], 0, ',', '.'); ?></h4>
                    <a href="produk?add=<?php echo $p['id_produk']; ?>" class="btn-premium" style="display: block; text-align: center;"><i class="fa fa-shopping-cart"></i> Booking Sekarang</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<style>
.panel:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,180,216,0.2) !important;
}
</style>

<?php include 'footer.php'; ?>
