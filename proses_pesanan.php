<?php
header('Content-Type: application/json');
include "koneksi.php";

$count_file = count($_FILES["foto"]["name"]); //menghitung jumlah file

$photos = []; //menyimpan path file ke dalam array

for ($i=0; $i < $count_file; $i++) { //melakukan perulangan penghitungan file
    $original_file_name = basename($_FILES["foto"]["name"][$i]); //mengambil nama asli file
    $sanitized_file_name = str_replace(' ', '_', $original_file_name); //menulis nama file dengan underscore
    $target_file = "uploads/" . $sanitized_file_name; //menentukan path tujuan yang diunggah
    $photos[$i] = $target_file; //menambahkan path file ke dalam array
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); //menulis nama file dengan huruf kecil
    $check = getimagesize($_FILES["foto"]["tmp_name"][$i]); //mengecek apakah file yang dikirim sesuai
    move_uploaded_file($_FILES["foto"]["tmp_name"][$i], $target_file); //memindahkan file sementara ke lokasi tujuan yaitu uploads
}


$id_payment = $_GET['id_payment'];
$template = $_POST['template'];
$pria = $_POST['pria'];
$wanita = $_POST['wanita'];
$ortupriaayah = $_POST['ortupriaayah'];
$ortupriaibu = $_POST['ortupriaibu'];
$ortuwanitaayah = $_POST['ortuwanitaayah'];
$ortuwanitaibu = $_POST['ortuwanitaibu'];
$jadwal = $_POST['jadwal'];
$lokasi = $_POST['lokasi'];
$telephone = $_POST['telephone'];
$no_rekening = $_POST['no_rekening'];

$foto_upload = json_encode($photos);


if (
    !empty($template) &&
    !empty($pria) &&
    !empty($wanita) &&
    !empty($ortupriaayah) &&
    !empty($ortupriaibu) &&
    !empty($ortuwanitaayah) &&
    !empty($ortuwanitaibu) &&
    !empty($jadwal) &&
    !empty($lokasi) &&
    !empty($telephone) &&
    !empty($id_payment) &&
    !empty($no_rekening)
) {
    if ($check !== false) {
        $sql = "insert into tb_pesanan (template, pria, wanita, ortupriaayah, ortupriaibu, ortuwanitaayah, ortuwanitaibu, jadwal, lokasi, telephone, no_rekening, foto, id_payment) VALUES('$template', '$pria', '$wanita', '$ortupriaayah', '$ortupriaibu', '$ortuwanitaayah', '$ortuwanitaibu', '$jadwal', '$lokasi', '$telephone', '$no_rekening', '$foto_upload', '$id_payment')";
        mysqli_query($conn, $sql);
  
        header("location: index.php?status=sukses");
        echo json_encode(
            array(
                'foto' => $target_file,
                'check' => $check,
                'count_file' => $count_file,
                'sanitized_file_name' => $sanitized_file_name
            ),
            JSON_PRETTY_PRINT
        );

        echo'<div class="alert alert-success" role="alert"> Data berhasil disimpan </div>';
    } else {
        header("location: index.php?status=gagal");
    }
} else {
    header("location: index.php?status=gagal");
}
