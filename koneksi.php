<?php

session_start();

//konfigurasi koneksi
$host = '127.0.0.1';
$user = 'root';
$dbname = 'db_rose';
$pass = '';

$base_url = 'http://localhost/wedding/rose/';

//koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $dbname);

//cek koneksi
if (!$conn) {
    die("konkesi gagal: " . mysqli_connect_error());
}
