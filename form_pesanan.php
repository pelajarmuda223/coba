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

    <!-- CSS Style-->
    <link rel="stylesheet" href="_assets/css/style.css">


    <!-- favicon -->
    <link rel="icon" type="image/png" href="_assets/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="_assets/img/favicon/favicon-32x32.png" sizes="16x16" />

    <!--font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <style>
        body {
            background-image: url("_assets/img/bg2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        /*button form2 */
        .button-submit {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            background-color: #dc143c;
            transition: background-color 0.2s ease;
            cursor: pointer;
            width: 230px;
            align-items: center;
        }

        .button-submit:hover {
            background-color: #45a049;
        }

        /*button reset form2 */
        .button-reset {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            background-color: #FFA500;
            transition: background-color 0.2s ease;
            cursor: pointer;
            width: 230px;
            align-items: center;
            margin-bottom: 5%;
        }

        .button-reset:hover {
            background-color: #45a049;
        }
    </style>

    <!-- Title -->
    <title>Rose Wedding-pesanan</title>

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

        <!-- SECTION CARD FORM PEMESAN -->
        <section id="title-form">
            <div class="container">
                <div class="card">
                    <div class="card-title">
                        <img id="img-form" src="_assets/img/roseform2.png" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!-- End SECTION CARD FORM PEMESAN -->

        <!-- SECTION FORM DATA PESANAN-->
        <section id="formulir">
            <div class="container">
                <div class="card mt-md-4">
                    <div class="card-header">
                        <h5 class="under-text">Data Pesanan:</h5>
                        <form id="form2" enctype="multipart/form-data" method="post" action="proses_pesanan.php?id_payment=<?= $_GET['id_payment']?>">
                            <div class="mb-3">Model Undangan
                                <select name="template" class="form-select" id="template" required>
                                    <option value="pilih">-- Pilih tema --</option>
                                    <option value="1">Elegance</option>
                                    <option value="2">Harmoni</option>
                                    <option value="3">Gleam</option>
                                    <option value="4">Whisper</option>
                                    <option value="5">Luminous</option>
                                    <option value="6">Charming</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="pria" class="form-label">Nama Mempelai Pria</label>
                                <input type="text" class="form-control" id="pria" name="pria" required>
                            </div>
                            <div class="mb-3">
                                <label for="wanita" class="form-label">Nama Mempelai Wanita</label>
                                <input type="text" class="form-control" id="wanita" name="wanita" required>
                            </div>

                            <div class="mb-3">
                                <label for="ortupriaayah" class="form-label">Nama Orang Tua Mempelai Pria (Ayah)</label>
                                <input type="text" class="form-control" id="ortupriaayah" name="ortupriaayah" required>
                            </div>
                            <div class="mb-3">
                                <label for="ortupriaibu" class="form-label">Nama Orang Tua Mempelai Pria (Ibu)</label>
                                <input type="text" class="form-control" id="ortupriaibu" name="ortupriaibu" required>
                            </div>

                            <div class="mb-3">
                                <label for="ortuwanitaayah" class="form-label">Nama Orang Tua Mempelai Wanita (Ayah)</label>
                                <input type="text" class="form-control" id="ortuwanitaayah" name="ortuwanitaayah" required>
                            </div>

                            <div class="mb-3">
                                <label for="ortuwanitaibu" class="form-label">Nama Orang Tua Mempelai Wanita (Ibu)</label>
                                <input type="text" class="form-control" id="ortuwanitaibu" name="ortuwanitaibu" required>
                            </div>

                            <div class="mb-3">
                                <label for="jadwal" class="form-label">Jadwal Pernikahan</label>
                                <input type="date" class="form-control" id="jadwal" name="jadwal" required>
                            </div>

                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi Pernikahan</label>
                                <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                            </div>

                            <div class="mb-3">
                                <label for="telepon" class="form-label">No.Telepon/WA</label>
                                <input type="text" class="form-control" id="telepon" name="telephone" required>
                            </div>

                            <div class="mb-3">
                                <label for="rekening" class="form-label">No. Rekening/E-wallet Pengantin</label>
                                <input type="text" class="form-control" id="rekening" name="no_rekening" required>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Pilih Foto Pre-Wedding Terbaik Mu</label>
                                <input type="file" class="form-control" id="foto" name="foto[]"  multiple>
                            </div>
                            <button type="submit" class="button-submit" name="kirim">Kirim</button>
                            <button type="reset" class="button-reset" onclick="reset()" id="reset" name="ulangi">Reset</button>
                    </div>
                    </form>
                </div>
            </div>
    </div>
    </section>
    <!--End SECTION FORM DATA PESANAN -->

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
    <!--End SECTION FOOTER -->
    </div>

    <!-- Script Reset Form-->
    <script>
        function reset() {
            const form = document.getElementById('reset');
            form.reset();
        }
    </script>

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