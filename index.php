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

    <!-- Index Style-->
    <link rel="stylesheet" href="_assets/css/index.css">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="_assets/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="_assets/img/favicon/favicon-32x32.png" sizes="16x16" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Title -->
    <title>Rose Wedding Digital Invitation Service</title>
</head>

<body>

    <div class="wrapper">
        <!-- addon button -->
        <!-- AUDIO -->
        <audio id="audio" src="_assets/audio/audio.mp3" loop></audio>
        <a href="#" class="audio-control"><i class="ri ri-volume-off"></i></a>
        <!-- To Top Button -->
        <a href="#" class="totop-btn" data-nav="beranda"><i class="ri ri-chevron-up"></i></a>
        <!-- WA Button -->
        <a href="https://wa.me/6281996996523" class="wa-btn" target="_blank"><i class="ri ri-whatsapp-alt"></i></a>

        <!-- POP-UP-->
        <?php if (isset($_GET['status'])) {
            if ($_GET['status'] == 'sukses') {
        ?>
                <script>
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Terimakasih pesanan anda sudah diterima. Admin akan menghubungi anda jika pesanan sudah siap",
                        icon: "success"
                    });
                </script>
            <?php
            }
        } else { ?>
            <div id="popup" class="popup-overlay">
                <div class="popup-content">
                    <button class="close-btn" onclick="closePopup()">Tutup</button>
                    <h2 class="iklan">Penawaran Terbaik</h2>
                    <a href="https://wa.link/qo7gep"><img src="_assets/img/iklan.png" alt="Iklan Fotografi"></a>
                </div>
            </div>
        <?php
        } ?>
        <!-- End Pop Up -->

        <!-- SECTION : NAVBAR -->
        <section id="navbar">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <div class="logo"><img id="logo" src="_assets/img/roselogo.png"><a href="index.php" data-nav="beranda"></a></div>
                    </div>
                    <div class="col-auto d-block d-lg-none">
                        <a href="#" class="open-navbar"><i class="ri ri-menu"></i></a>
                    </div>
                    <div class="col-12 col-lg-auto">
                        <div class="nav">
                            <a href="#" data-nav="beranda" class="nav-item">Home</a>
                            <a href="#" data-nav="tentang-scroll" class="nav-item">Tentang Kami</a>
                            <a href="#" data-nav="fitur" class="nav-item">Fitur</a>
                            <a href="#" data-nav="template-video" class="nav-item">Template</a>
                            <a href="#" data-nav="harga" class="nav-item">Harga</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION : NAVBAR -->

        <!-- SECTION : BERANDA -->
        <section id="beranda">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-12 col-md-9 col-lg-8">
                        <h1>Buat Undangan Pernikahan Anda Menjadi Lebih Modern</h1>
                        <p>Jadikan hari bahagia Anda menjadi lebih Spesial dengan Undangan yang indah dari Rose Wedding
                            Digital</p>
                        <a data-nav="harga" class="btn">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <img src="_assets/img/clipart/device.png" alt="">
        </section>
        <!-- END SECTION : BERANDA -->

        <!-- SECTION : TENTANG -->
        <section id="tentang">
            <div class="container">
                <img src="_assets/img/clipart/ornament-0.png" class="ornament-0 d-none d-lg-block" alt="">
                <div class="row row-1 align-items-center justify-content-between" id="tentang-scroll">
                    <div class="col-12 col-lg-5" data-aos="fade-right" data-aos-duration="1500">
                        <h1>Apa Itu <span>Rose Wedding Digital</span>?</h1>
                        <p>Kami adalah penyedia undangan digital yang modern dan elegan.
                            Ciptakan momen istimewa Anda dengan desain yang menawan.
                            temukan kenyaman undangan online yang praktis serta ramah lingkungan,
                            Bergabunglah bersama kami dalam merayakan cinta dan kebahagiaan.</p>
                    </div>
                    <div class="col-12 col-lg-auto d-none d-lg-block" data-aos="fade-left" data-aos-duration="1500">
                        <div class="img-wrapper">
                            <img src="_assets/img/clipart/ornament-1.png" class="ornament-1" alt="">
                            <img src="_assets/img/clipart/ornament-2.png" class="ornament-2" alt="">
                            <div class="img-placeholder">
                                <img src="_assets/img/clipart/img-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-2 justify-content-between align-items-center">
                    <div class="col-12 col-lg-5 d-none d-lg-block" data-aos="fade-right" data-aos-duration="1500">
                        <div class="img-wrapper">
                            <img src="_assets/img/clipart/ornament-3.png" class="ornament-3" alt="">
                            <img src="_assets/img/clipart/ornament-4.png" class="ornament-4" alt="">
                            <div class="img-placeholder">
                                <img src="_assets/img/clipart/img-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-duration="1500">
                        <h1>Mengapa Memilih <span>Rose Wedding Digital</span> Sebagai Jasa Penyedia Undangan Digital
                        </h1>
                        <p>Kombinasi desain eksklusif, kemudahan dalam penggunaan dan kualitas yang terbaik.
                            Siap menghadirkan elegansi modern pada momen istimewa Anda.
                            Bergabunglah bersama kami untuk pengalaman yang pada undangan anda yang tak terlupakan.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION : TENTANG -->

        <!-- SECTION : FITUR -->
        <section id="fitur">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col-12 col-lg-6">
                        <h1 class="text-center">Fitur Unggulan yang Ada Di <br><span style="color: #890025;">Rose
                                Wedding Digital</span></h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card card-body">
                            <img src="_assets/img/clipart/ic-1.png" alt="">
                            <h3>Responsive</h3>
                            <p>Semua design yang ada di Rose Wedding Digital sudah responsive. Menyesuaikan ukuran
                                setiap perangkat</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card card-body">
                            <img src="_assets/img/clipart/ic-2.png" alt="">
                            <h3>Galeri Foto & Video</h3>
                            <p>Abadikan setiap momen terindah dalam hidup anda dengan balutan undangan yang indah dari
                                Rose Wedding Digital</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card card-body">
                            <img src="_assets/img/clipart/ic-3.png" alt="">
                            <h3>Countdown Timer</h3>
                            <p>Memberikan notifikasi waktu pengingat hitung mundur untuk acara spesial anda.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card card-body">
                            <img src="_assets/img/clipart/ic-4.png" alt="">
                            <h3>Musik Latar</h3>
                            <p>Kreasikan setiap kebahagian pernikahan anda dengan musik yang indah dari Rose Wedding
                                Digital</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card card-body">
                            <img src="_assets/img/clipart/ic-5.png" alt="">
                            <h3>Lokasi & Waktu Resepsi</h3>
                            <p>Memberikan lokasi dan waktu pernikahan anda dengan lebih modern</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card card-body">
                            <img src="_assets/img/clipart/ic-6.png" alt="">
                            <h3>Harapan & Doa</h3>
                            <p>Memberikan tempat untuk para tamu undangan memberikan doa dan harapan mereka di hari
                                bahagia anda. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION : FITUR -->

        <!--SECTION : VIDEO-CINEMATIK -->
        <section id="template-video">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1500">
                </div>
                <div class="row">
                    <!-- Card-1 -->
                    <div class=" row justify-content-center" data-aos="fade-up" data-aos-duration="1500">
                        <video controls loop muted autoplay>
                            <source src="_assets/video/Cinematic.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION : VIDEO-CINEMATIK -->

        <!-- SECTION : TEMPLATE-WEB -->
        <section id="template-web">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col-12 col-lg-7">
                        <h1 class="text-center">Berbagai Web Template <br>Design yang Siap Pakai</h1>
                        <p>Sesuaikan undangan Anda dengan koleksi berbagai tema undangan digital kami. Temukan berbagai
                            desain yang menakjubkan yang dapat disesuaikan dengan acara anda. Persiapkan undangan impian
                            Anda sekarang.</p>
                    </div>
                </div>
                <div class="row">
                    <!-- Card-1 -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card card-body">
                            <h3>Elegance</h3>
                            <div class="img-container">
                                <img src="_assets/img/tem-1.png" alt="image1">
                            </div>
                            <a href="undangan/1/long/index.php" target="_blank" class="btn">Live Preview</a>
                        </div>
                    </div>
                    <!-- Card-2 -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card card-body">
                            <h3>Harmony</h3>
                            <div class="img-container">
                                <img src="_assets/img/tem-2.png" alt="image2">
                            </div>
                            <a href="undangan/2/long/index.php" target="_blank" class="btn">Live Preview</a>
                        </div>
                    </div>
                    <!-- Card-3 -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card card-body">
                            <h3>Gleam</h3>
                            <div class="img-container">
                                <img src="_assets/img/tem-3.png" alt="image3">
                            </div>
                            <a href="undangan/3/long/index.php" target="_blank" class="btn">Live Preview</a>
                        </div>
                    </div>
                    <!-- Card-4 -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card card-body">
                            <h3>Whisper</h3>
                            <div class="img-container">
                                <img src="_assets/img/tem-4.png" alt="image4">
                            </div>
                            <a href="undangan/4/long/index.php" target="_blank" class="btn">Live Preview</a>
                        </div>
                    </div>
                    <!-- Card-5 -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card card-body">
                            <h3>Luminous</h3>
                            <div class="img-container">
                                <img src="_assets/img/tem-5.png" alt="image5">
                            </div>
                            <a href="undangan/5/long/index.php" target="_blank" class="btn">Live Preview</a>
                        </div>
                    </div>

                    <!-- Card-6 -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card card-body">
                            <h3>Charming</h3>
                            <div class="img-container">
                                <img src="_assets/img/tem-6.png" alt="image6">
                            </div>
                            <a href="undangan/6/long/index.php" target="_blank" class="btn">Live Preview</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION : TEMPLATE-WEB -->

        <!-- SECTION : HARGA -->
        <section id="harga">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col-12 col-lg-7">
                        <h1 class="text-center">Berbagai Harga dan fitur<br>yang dapat anda pilih</h1>
                        <p>Beragam Paket Pilihan Yang Ditawarkan dengan Harga yang Terjangkau untuk Momen Spesial Anda.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <!-- Card-1 -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-down" data-aos-duration="1500">
                        <div class="card">
                            <div class="card-body">
                                <h4>Paket Luxury</h4>
                                <h2>Rp350.000</h2>
                                <ul>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">Musik Latar</li>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">5 Foto PreWedding</li>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">6 Hari Waktu Aktif Undangan
                                    </li>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">Animasi Undangan Pernikahan
                                    </li>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">Fitur (Maps, Payment,
                                        Countdown, RSVP)</li>
                                </ul>
                                <a href="form_pemesan.php" class="btn">Pilih Paket</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card-2 -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-down" data-aos-duration="1500">
                        <div class="card card-highlight">
                            <div class="card-body">
                                <h4>Paket Premium</h4>
                                <h2>Rp500.000</h2>
                                <ul>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">Musik Latar</li>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">7 Hari Waktu Aktif Undangan
                                    </li>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">Animasi Undangan Pernikahan
                                    </li>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">8 Foto PreWedding </li>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">Fitur Lengkap</li>
                                </ul>
                                <a href="form_pemesan.php" class="btn">Pilih Paket</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card-3 -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-down" data-aos-duration="1500">
                        <div class="card">
                            <div class="card-body">
                                <h4>Paket Classic</h4>
                                <h2>Rp200.000</h2>
                                <ul>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">Musik Latar</li>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">4 Foto PreWedding</li>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">2 Hari Waktu Aktif Undangan
                                    </li>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">Animasi Undangan Pernikahan
                                    </li>
                                    <li><img src="_assets/img/clipart/ic-check.png" alt="">Fitur (RSVP, Countdown)</li>
                                </ul>
                                <a href="form_pemesan.php" class="btn">Pilih Paket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION : HARGA -->

        <!-- SECTION : CLOSING -->
        <section id="closing">
            <div class="background-filter"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h1>Apa Lagi yang Anda Tunggu? Pesan Sekarang dan Dapatkan Undangan Pernikahan Idaman Anda</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <a data-nav="harga" class="btn btn-1">Pesan Sekarang</a>
                    </div>
                    <div class="col-auto">
                        <a href="https://wa.me/6281996996523" class="btn btn-2">Tanya Kami</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION : CLOSING -->

        <!-- SECTION : FOOTER -->
        <footer>
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-md-auto">©️ Rose Wedding Digital - All Rights Reserved 2024</div>
                    <div class="col-12 col-md-auto">
                        <a href="https://www.instagram.com/rose.photography_____/">
                            <img src="_assets/img/igs.png" class="gambar">
                        </a>
                        <a href="   ">
                            <img src="_assets/img/fb.png" class="gambar">
                        </a>
                        <a href="https://wa.link/qo7gep">
                            <img src="_assets/img/order2.png" class="order">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END SECTION : FOOTER -->
    </div>

    <!-- Modal Video Popup -->
    <div class="modal fade" id="mPopup" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <video id="video" src="" class="ratio ratio-16x9" controls></video>
                </div>
            </div>
        </div>
    </div>
    <!-- END Modal Video Popup -->

    <!-- Script POP-UP -->
    <script>
        // Fungsi untuk menampilkan pop-up
        function showPopup() {
            document.getElementById('popup').style.display = 'flex';
        }

        // Fungsi untuk menutup pop-up
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }

        // Tampilkan pop-up setelah 3 detik
        setTimeout(showPopup, 3000);
    </script>
    <!-- End Script POP-UP -->

    <!-- JQ -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- BS5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Theme -->
    <script src="_assets/js/app.js"></script>
</body>

</html>