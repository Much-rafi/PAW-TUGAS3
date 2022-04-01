<?php
$konek = mysqli_connect("localhost", "root", "", "rafi");

$id = $_GET["id"];
$rafi = mysqli_query($konek, "SELECT * FROM rafi_089 where id=$id");
$result = mysqli_fetch_assoc($rafi);
$data = $result;

if (isset($_POST["submit"])) {
    $Nama = $_POST["Nama"];
    $Umur = $_POST["Umur"];
    $Alamat = $_POST["Alamat"];
    $Durasi = $_POST["Durasi"];
    $insert = mysqli_query($konek, "UPDATE rafi_089 SET Nama='$Nama', Umur='$Umur', Alamat='$Alamat', Durasi='$Durasi' where id=$id");
    $hasil = mysqli_affected_rows($konek);
    if ($hasil > 0) {
      header('Location: tables-data.php');
        echo "<script>
                alert('Selamat data anda berhasil diubah');
        </script>";
    } else {
        echo "<script>
                alert('Mohon maaf, Data anda belum berhasil dirubah');
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">KOS HAJI RAFI</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Edit data Penghuni Kos</h5>
                    <p class="text-center small">Masukan Data Diri Anda !</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="">
                  <input type="hidden" value="<?php echo $data['id']; ?>">
                    <div class="col-12">
                      <label  class="form-label">Nama</label>
                      <input type="text" name="Nama" class="form-control" value="<?php echo $data['Nama']; ?>"  required/>
                      <div class="invalid-feedback">Masukan nama anda !</div>
                    </div>

                    <div class="col-12">
                      <label  class="form-label">Umur</label>
                      <input type="text" name="Umur" class="form-control" value="<?php echo $data['Umur']; ?>"  required/>
                      <div class="invalid-feedback">Masukan Umur anda !</div>
                    </div>
                    <div class="col-12">
                      <label  class="form-label">Alamat</label>
                      <input type="text" name="Alamat" class="form-control" value="<?php echo $data['Alamat']; ?>"  required/>
                      <div class="invalid-feedback">Masukan Alamat anda !</div>
                    </div>
                    <div class="col-12">
                      <label  class="form-label">Durasi Kos / Bulan</label>
                      <input type="text" name="Durasi" class="form-control" value="<?php echo $data['Durasi']; ?>"  required/>
                      <div class="invalid-feedback"> !</div>
                    </div>           
                    <div class="col-12">
                      <button type="submit" name="submit" class="btn btn-primary w-100"  >Simpan Perubahan
                      <a href="tables-data.php"></a>
                      </button>
                    </div>
                     
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">RafDeveloper</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>