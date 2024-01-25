<?php
include 'includes/header.php';
include 'config/dbcon.php';
$invoices = $_GET['inv'];
$d_order = mysqli_query($conn, "SELECT * FROM produksi WHERE invoice = '$invoices'");
$t_order = mysqli_fetch_assoc($d_order);

$sortage = mysqli_query($conn, "SELECT * FROM produksi where cek = '1'");
$cek_sor = mysqli_num_rows($sortage);

// customer
$cs = mysqli_query($conn, "SELECT * FROM customer WHERE kode_customer = '" . $t_order['kode_customer'] . "'");
$t_cs = mysqli_fetch_assoc($cs);
?>

<div class="container">
    <br>
    <h5 class="bg-success" style="padding: 7px; width: 710px; font-weight: bold;"><marquee>Lakukan Reload Setiap Masuk Halaman ini, untuk menghindari terjadinya kesalahan data dan informasi</marquee></h5>
    <a href="produksi.php" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> Reload</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Invoice</th>
                <th scope="col">Kode Customer</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT DISTINCT invoice, kode_customer, status, kode_produk, qty,terima,tolak, cek FROM produksi group by invoice");
            $no = 1;
            $array = 0;
            $nama_material = []; // Initialize the $nama_material array here

            while ($row = mysqli_fetch_assoc($result)) {
                $kodep = $row['kode_produk'];
                $inv = $row['invoice'];
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['invoice']; ?></td>
                    <td><?= $row['kode_customer']; ?></td>
                    <?php if ($row['terima'] == 1) { ?>
                        <td style="color: green;font-weight: bold;">Pesanan Diterima (Siap Kirim)
                        <?php
                    } else if ($row['tolak'] == 1) {
                        ?>
                            <td style="color: red;font-weight: bold;">Pesanan Ditolak
                            <?php
                        }
                        if ($row['terima'] == 0 && $row['tolak'] == 0) {
                            ?>
                                <td style="color: orange;font-weight: bold;"><?= $row['status']; ?>
                                <?php
                            }
                            $t_bom = mysqli_query($conn, "SELECT * FROM bom_produk WHERE kode_produk = '$kodep'");

                            while ($row1 = mysqli_fetch_assoc($t_bom)) {
                                $kodebk = $row1['kode_bk'];

                                $inventory = mysqli_query($conn, "SELECT * FROM inventory WHERE kode_bk = '$kodebk'");
                                $r_inv = mysqli_fetch_assoc($inventory);

                                $kebutuhan = $row1['kebutuhan'];
                                $qtyorder = $row['qty'];
                                $inventory = $r_inv['qty'];

                                $bom = ($kebutuhan * $qtyorder);
                                $hasil = $inventory - $bom;
                                if ($hasil < 0 && $row['tolak'] == 0) {
                                    mysqli_query($conn, "UPDATE produksi SET cek = '1' where invoice = '$inv'");
                                    $nama_material[] = $r_inv['nama'];
                                }
                            }
                            ?>
                            </td>
                            <td><?= date('Y/m/d'); ?></td>

                            <td>
                                <?php if ($row['tolak'] == 0 && $row['cek'] == 1 && $row['terima'] == 0) { ?>
                                    <a href="proses/tolak.php?inv=<?= $row['invoice']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menolak ?')"><i class="glyphicon glyphicon-remove-sign"></i> Tolak</a>
                                <?php } else if ($row['terima'] == 0 && $row['cek'] == 0) { ?>
                                    <a href="proses/terima.php?inv=<?= $row['invoice']; ?>&kdp=<?= $row['kode_produk']; ?>" class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Terima</a>
                                    <a href="proses/tolak.php?inv=<?= $row['invoice']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menolak ?')"><i class="glyphicon glyphicon-remove-sign"></i> Tolak</a>
                                <?php } ?>
                                <!-- Add data-toggle and data-target attributes to open the modal -->
                                <a href="#" data-toggle="modal" data-target="#myModal<?= $row['invoice']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Detail Pesanan</a>
                            </td>
                </tr>

                <!-- Modal for each order -->
                <div class="modal fade" id="myModal<?= $row['invoice']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <a href="m_produk.php" class="btn btn-default close"></a>
                                <h4 class="modal-title" id="myModalLabel">#<?= $row['invoice']; ?></h4>
                            </div>
                            <div class="modal-body">
                                <!-- Add modal content for each order -->
                                <!-- ... (your modal content) ... -->
                            </div>
                            <div class="modal-footer">
                                <a href="produksi.php" class="btn btn-default">Close</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>

    <?php
    if ($cek_sor > 0) {
    ?>
        <br>
        <br>
        <!-- ... (your additional content) ... -->
    <?php
    }
    ?>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- ... (your additional content) ... -->

<?php
include 'includes/footer.php';
?>
