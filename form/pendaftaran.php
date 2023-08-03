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
    <title>Pendaftaran</title>
</head>
<body>
    <?php
    date_default_timezone_set('Asia/Jakarta');
    $tgl_pendaftaran = date("Y-m-d");
    $queryy = mysql_query("SELECT no_antrian FROM pendaftaran WHERE tgl_pendaftaran = '$tgl_pendaftaran'");
    $htg = mysql_num_rows($queryy);

    $next = $htg + 1;

    $no_antrian = $tgl_pendaftaran . '/' . $next;

    $hitung = mysql_query("SELECT max(id_customer) as id_terakhir from customer");
    $cari = mysql_fetch_array($hitung);
    $id_lanjut = $cari['id_terakhir'] + 1;

    ?>

    <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post" action="../pages/proses_pendaftaran.php">
                        <input type="hidden" class="form-control" id="nama" name="id_customer" value="<?= $id_lanjut; ?>">
                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Pendaftaran</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required="">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="email">No. Handphone</label>
                                <input type="number" class="form-control" id="email" name="no_hp" placeholder="No. Handphone Anda" required="">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="email">Alamat</label>
                                <input type="text" class="form-control" id="email" name="alamat" placeholder="Alamat Anda" required="">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="email">No. Plat</label>
                                <input type="text" class="form-control" id="email" name="nomor_plat" placeholder="No. Plat Kendaraan Anda" required="">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="select">Type Mobil</label>
                                <?php
                                $result2 = mysql_query("select * from type_mobil");
                                echo '<select name="type_mobil" class="form-control-rounded form-control" required>';
                                echo '<option>Pilih Type Mobil</option>';
                                while ($row2 = mysql_fetch_array($result2)) {
                                    echo '<option value="' . $row2['type_mobil'] . '">' . $row2['type_mobil'] . '</option>';
                                }
                                echo '</select>';
                                ?>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="email">No. Antrian</label>
                                <input type="text" class="form-control-rounded form-control" value="<?php echo $next; ?>" required="" readonly name="next">
                                <input type="hidden" name="no_antrian" class="form-control-rounded form-control" value="<?php echo $no_antrian; ?>" required="" readonly>
                            </div>


                            <div class="col-md-6 col-sm-6">
                                <label for="select">Jenis Cucian</label>
                                <?php
                                $result = mysql_query("SELECT * FROM jenis_cucian");
                                $jsArray = "var prdName = new Array();\n";
                                echo '<select class="form-control" name="id_jenis_cucian" onchange="document.getElementById(\'txt2\').value = prdName[this.value]">';
                                echo '<option>Pilih Jenis Cucian</option>';
                                while ($row = mysql_fetch_array($result)) {
                                    echo '<option value="' . $row['id_jenis_cucian'] . '">' . $row['jenis_cucian'] . '</option>';
                                    $jsArray .= "prdName['" . $row['id_jenis_cucian'] . "'] = '" . addslashes($row['biaya']) . "';\n";
                                }
                                echo '</select>';

                                ?>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="email">Tanggal Pendaftaran</label>
                                <input type="date" class="form-control" id="email" name="tgl_pendaftaran" value="<?= $tgl_pendaftaran; ?>" readonly>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="email">Jam Pendaftaran</label>
                                <input type="time" class="form-control" id="email" name="jam_pendaftaran" min="08:00:00" max="18:00:00" required="">
                            </div>

                            <input type="hidden" name="total_biaya" id="txt2" class="form-control" readonly="" onkeyup="sum();" />
                            <script type="text/javascript">
                                <?php echo $jsArray; ?>
                            </script>

                            <div class="col-md-12 col-sm-12">
                                <button type="submit" class="form-control" id="cf-submit" name="submit">Daftar Sekarang</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     
</body>
</html>