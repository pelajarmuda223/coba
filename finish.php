<?php

include ('koneksi.php');

//proses hasil transaksi
if (isset($_GET['order_id']) && isset($_GET['status_code']) && isset($_GET['transaction_status'])) { //memeriksa parameter kode
    $order_id = $_GET['order_id'];
    $status_code = $_GET['status_code'];
    $transaction_status = $_GET['transaction_status'];

    if ($status_code == 200) { //
        setcookie('transaction', '', time() - 3600, '/');
        mysqli_query($conn, "UPDATE  tb_payment SET status_transaksi = 1 WHERE order_id = $order_id");
        $getIdPayment = mysqli_query($conn, "SELECT id FROM tb_payment WHERE order_id = $order_id");
        $get = mysqli_fetch_assoc($getIdPayment);
        header('Location: form_pesanan.php?id_payment=' . $get['id']);
    } else {
        echo "Pembayaran gagal";
    }
}   