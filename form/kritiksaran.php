<?php
include "../config/koneksi.php";
?>

<?php
error_reporting(0);
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/tooplate-style.css">
    <title>Kritik Dan Saran</title>
</head>

<body>
    <div class="col-md-12 col-sm-12">
        <!-- CONTACT FORM HERE -->
        <form id="saran-form" role="form" method="post" action="../pages/proses_saran.php">

            <!-- SECTION TITLE -->
            <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                <h2>Kritik dan Saran</h2>
            </div>

            <div class="wow fadeInUp" data-wow-delay="0.8s">
                <div class="col-md-6 col-sm-6">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required="">
                </div>

                <div class="col-md-6 col-sm-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda">
                </div>

                <div class="col-md-6 col-sm-6">
                    <label for="email">Pesan</label>
                    <input type="text" class="form-control" id="pesan" name="pesan" placeholder="Isi Pesan Anda" required="">
                </div>

                <div class="col-md-6 col-sm-6">
                    <label for="email">Kebersihan</label>
                    <input type="number" class="form-control" id="email" name="kebersihan" placeholder="Nilai Point Kebersihan" maxlength="3" required="">
                </div>

                <div class="col-md-6 col-sm-6">
                    <label for="email">Keramahan</label>
                    <input type="number" class="form-control" id="email" name="keramahan" placeholder="Nilai Point Keramahan" maxlength="3" required="">
                </div>

                <div class="col-md-6 col-sm-6">
                    <label for="email">Ketelitian</label>
                    <input type="number" class="form-control" id="email" name="ketelitian" placeholder="Nilai Point Ketelitian" maxlength="3" required="">
                </div>

                <br><br><br><br><br>

                <div class="col-md-12 col-sm-12">
                    <button type="submit" class="form-control" id="cf-submit" name="submit">Kirim Saran</button>
                </div>
            </div>
        </form>
    </div>
</body>