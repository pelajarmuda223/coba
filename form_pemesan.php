<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BS5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Rooticon -->
    <link rel="stylesheet" href="https://cdn.rootpixel.net/assets/rooticon/v2/rooticon.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Theme -->
    <link rel="stylesheet" href="_assets/css/app.min.css">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="_assets/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="_assets/img/favicon/favicon-32x32.png" sizes="16x16" />

    <!--font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- CSS Style-->
    <link rel="stylesheet" href="_assets/css/style.css">

    <!-- Midtrans -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/iris" data-client-key="SB-Mid-client-ITIoizKoI47UXKBz"></script>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-ITIoizKoI47UXKBz"></script>

    <!-- Title -->
    <title>Rose Wedding-Pemesan</title>

    <style>
        body {
            background-image: url("_assets/img/bg2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
    </style>
</head>

<body>

    <div class=" wrapper">
        <!-- To Top Button -->
        <a href="#" class="totop-btn" data-nav="beranda"><i class="ri ri-chevron-up"></i></a>
        <!--Navbar-->
        <section id="navbar">
            <div class="navigasi">
                <a class="logo-brand" href="index.php">
                    <img id="logo" src="_assets/img/roselogo.png" alt="image">
                </a>
            </div>
        </section>
        <!--End Navbar-->

        <!--SECTION CARD FORM PEMESAN-->
        <section id="title-form">
            <div class="container">
                <div class="card">
                    <div class="back">
                        <i class="ri ri-chevron-left"><a href="index.php" class="kembali">Kembali</a></i>
                    </div>
                    <div class="card-title">
                        <img id="img-form" src="_assets/img/roseform2.png" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!--End SECTION CARD FORM PEMESAN-->

        <!--SECTION FORM PEMESAN-->
        <section id="formulir">
            <div class="container">
                <div class="card mt-md-4">
                    <div class="card-body">
                        <img src="_assets/img/fotoform.png" alt="image">
                    </div>
                    <div class="card-header">
                        <h5 class="under-text">Data Pemesan:</h5>
                        <div class="card-text">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="telepon" class="form-label">No.HP/WA</label>
                                <input type="text" class="form-control" id="kontak" name="kontak" placeholder="masukkan nomor HP/WA" required>
                            </div>
                            <div class="mb-md-3">Pilih Paket
                                <select id="paymentOptions" class="form-select" name="biaya">
                                    <option value="0">-- Pilih Paket --</option>
                                    <option value="350000">Paket Luxury</option>
                                    <option value="500000">Paket Premium</option>
                                    <option value="1000">Paket Clssic</option>
                                </select>
                                <div id="paymentAmount" class="nilai"></div>
                            </div>
                            <button class="button-submit" id="bayar" name="simpan">Pilih metode pembayaran</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End SECTION FORM PEMESAN-->

        <!-- SECTION FOOTER -->
        <footer>
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-md-auto">©️ Rose Wedding Digital - All Rights Reserved 2024</div>
                    <div class="col-12 col-md-auto">
                        <a href="https://www.instagram.com/rose.photography_____/">
                            <img src="_assets/img/igs.png" class="gambar">
                        </a>
                        <a href="https://www.facebook.com/jefri.uciha.7">
                            <img src="_assets/img/fb.png" class="gambar">
                        </a>
                        <a href="https://wa.link/qo7gep">
                            <img src="_assets/img/order2.png" class="order">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <!--End SECTION FOOTER-->

    </div>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-ITIoizKoI47UXKBz"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <?php
    if (isset($_COOKIE['transaction'])) { //memeriksa apakah cookie dengan nama transaksi sudah ada
    ?>
        <script>
            snap.pay('<?php echo $_COOKIE['transaction'] ?>')
        </script>
    <?php //untuk proses bayar otomatis jika sudah dimulai transaksi dan disimpan di cookie
    }
    ?>

    <script>
        $(document).ready(function() {
            $('#bayar').click(function() {
                let nama = $('#nama').val() //mengambil nilai input dari form
                let kontak = $('#kontak').val()
                let biaya = $('#paymentOptions').val()
                $.ajax({ //ajax requset ke proses.php (mengirim dan menerima data secara asinkronus)
                    //menjalankan callback function utk ajax request kedua
                    url: 'proses.php',
                    type: 'POST',
                    data: {
                        nama: nama,
                        kontak: kontak,
                        biaya: biaya
                    },
                    success: function(data) { //request berhasil menampilkan snap pay, utk proses bayar 
                        //dengan data yang diterima
                        $.ajax({
                            url: 'token.php',
                            type: 'POST',
                            data: {
                                order_id: data.order_id //mengirim order id ke token.php untuk mendapatkan token pembayaran
                            },
                            success: function(data) {
                                snap.pay(data) //memproses pembayaran
                            }
                        });
                    }
                });
            });
        });
    </script>

    <!--JS-->
    <script src="_assets/js/javas.js"></script>
    <!-- JQ -->
    <!-- BS5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Theme -->
    <script src="_assets/js/app.js"></script>
</body>

</html>