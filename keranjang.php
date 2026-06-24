<?php
session_start();
require 'koneksi.php';

// Hapus item dari keranjang
if (isset($_GET['remove'])) {
    $id_remove = (int)$_GET['remove'];
    unset($_SESSION['cart'][$id_remove]);
    header("Location: keranjang");
    exit();
}

$title = "Keranjang Booking";
include 'header.php';
?>

<div class="container" style="margin-top: 100px; margin-bottom: 100px; min-height: 50vh;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 style="font-weight: 800; color: #0077b6; margin-bottom: 30px;"><i class="fa fa-shopping-cart"></i> Keranjang Anda</h2>
            
            <div class="panel panel-default" style="border-radius: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.05); overflow: hidden;">
                <div class="panel-body" style="padding: 0;">
                    <table class="table table-hover" style="margin-bottom: 0;">
                        <thead style="background: #f8f9fa;">
                            <tr>
                                <th style="padding: 15px 20px;">Produk</th>
                                <th style="padding: 15px 20px;">Harga</th>
                                <th style="padding: 15px 20px; text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                                foreach ($_SESSION['cart'] as $id_produk => $jumlah) {
                                    $q = mysql_query("SELECT * FROM products WHERE id_produk='$id_produk'");
                                    $p = mysql_fetch_array($q);
                                    $subtotal = $p['harga'] * $jumlah; // Assuming quantity is 1 for booking, but we store it anyway
                                    $total += $subtotal;
                            ?>
                            <tr>
                                <td style="padding: 20px; vertical-align: middle;">
                                    <strong><?php echo $p['nama_produk']; ?></strong>
                                </td>
                                <td style="padding: 20px; vertical-align: middle;">
                                    Rp <?php echo number_format($p['harga'], 0, ',', '.'); ?>
                                </td>
                                <td style="padding: 20px; vertical-align: middle; text-align: center;">
                                    <a href="keranjang?remove=<?php echo $id_produk; ?>" class="btn btn-danger btn-sm" style="border-radius: 50px;"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php 
                                }
                            } else {
                                echo '<tr><td colspan="3" class="text-center" style="padding: 30px; color: #999;">Keranjang masih kosong. <a href="produk">Lihat Katalog</a></td></tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php if ($total > 0) { ?>
                <div class="panel-footer" style="background: white; padding: 20px; display: flex; justify-content: space-between; align-items: center;">
                    <h3 style="margin: 0; font-weight: 800; color: #ff5050;">Total: Rp <?php echo number_format($total, 0, ',', '.'); ?></h3>
                    <a href="checkout" class="btn-premium" style="padding: 10px 30px;"><i class="fa fa-check-circle"></i> Proses Pembayaran</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
