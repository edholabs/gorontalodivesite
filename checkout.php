<?php
session_start();
require 'koneksi.php';

// Cek apakah sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login_user");
    exit();
}

// Cek apakah keranjang kosong
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
    header("Location: produk");
    exit();
}

$user_id = $_SESSION['user_id'];
$tanggal = date('Y-m-d H:i:s');
$total = 0;

// Hitung total dulu
foreach ($_SESSION['cart'] as $id_produk => $jumlah) {
    $q = mysql_query("SELECT harga FROM products WHERE id_produk='$id_produk'");
    $p = mysql_fetch_array($q);
    $total += $p['harga'] * $jumlah;
}

// Simpan ke tabel bookings
$insert_booking = "INSERT INTO bookings (id_user, tanggal_booking, total_harga, status_pembayaran) VALUES ('$user_id', '$tanggal', '$total', 'Pending')";
if (mysql_query($insert_booking)) {
    // Ambil ID booking yang baru saja dibuat
    // Because mysql_insert_id() requires the connection resource in some PHP versions, 
    // and since this is a legacy wrapper, we'll get the last id manually or using a query if needed.
    // However, since it's a wrapper, we can just query the max id for this user.
    $q_id = mysql_query("SELECT MAX(id_booking) AS last_id FROM bookings WHERE id_user='$user_id'");
    $r_id = mysql_fetch_array($q_id);
    $id_booking = $r_id['last_id'];

    // Simpan ke detail
    foreach ($_SESSION['cart'] as $id_produk => $jumlah) {
        $q2 = mysql_query("SELECT harga FROM products WHERE id_produk='$id_produk'");
        $p2 = mysql_fetch_array($q2);
        $subtotal = $p2['harga'] * $jumlah;

        mysql_query("INSERT INTO booking_details (id_booking, id_produk, jumlah, subtotal) VALUES ('$id_booking', '$id_produk', '$jumlah', '$subtotal')");
    }

    // Kosongkan keranjang
    unset($_SESSION['cart']);
    $success = true;
}

$title = "Checkout Berhasil";
include 'header.php';
?>

<div class="container" style="margin-top: 100px; margin-bottom: 100px; min-height: 50vh; text-align: center;">
    <?php if (isset($success)) { ?>
        <i class="fa fa-check-circle" style="font-size: 80px; color: #4CAF50; margin-bottom: 20px;"></i>
        <h1 style="font-weight: 800; color: #333;">Checkout Berhasil!</h1>
        <p style="font-size: 1.2em; color: #666; margin-bottom: 30px;">Terima kasih <strong><?php echo $_SESSION['user_nama']; ?></strong>, pesanan Anda telah kami terima dengan status <strong>PENDING</strong>.</p>
        <p>Silakan hubungi Admin atau tunggu konfirmasi lebih lanjut untuk proses pembayaran.</p>
        <a href="produk" class="btn-premium" style="margin-top: 20px;"><i class="fa fa-arrow-left"></i> Kembali ke Katalog</a>
    <?php } else { ?>
        <i class="fa fa-times-circle" style="font-size: 80px; color: #ff5050; margin-bottom: 20px;"></i>
        <h1 style="font-weight: 800; color: #333;">Terjadi Kesalahan!</h1>
        <p>Maaf, pesanan Anda gagal diproses.</p>
        <a href="keranjang" class="btn-premium"><i class="fa fa-shopping-cart"></i> Kembali ke Keranjang</a>
    <?php } ?>
</div>

<?php include 'footer.php'; ?>
