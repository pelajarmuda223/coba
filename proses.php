<?php

header('Content-Type: application/json');
include "koneksi.php";

$nama = $_POST['nama'];
$kontak = $_POST['kontak'];
$biaya = $_POST['biaya'];
$order_id = rand();
$status_transaksi = 0;

if (empty($nama) || empty($kontak) || empty($biaya) || empty($order_id)) {
    die("Semua field harus diisi.");
}

mysqli_query($conn, "insert into tb_payment (nama, kontak, order_id, biaya, status_transaksi) values('$nama','$kontak', '$order_id', '$biaya', '$status_transaksi')");

echo json_encode(
    array(
        'nama' => $nama,
        'kontak' => $kontak,
        'biaya' => $biaya,
        'order_id' => $order_id,
        'status_transaksi' => $status_transaksi
    ),
    JSON_PRETTY_PRINT
);