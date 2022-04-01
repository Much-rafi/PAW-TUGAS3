<?php
$konek = mysqli_connect("localhost", "root", "", "rafi");
$hasil = [];
$rafi = mysqli_query($konek, "SELECT * FROM rafi_089");
while ($rafi2 = mysqli_fetch_assoc($rafi)) {
    $hasil[] = $rafi2;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / Data - NiceAdmin Bootstrap Template</title>
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


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">KOS KOSAN HAJI RAFI</h5>
              <p>Data penghuni kos HJ. Rafi 2022  <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank"></a> <code>.</code></p>
              <div class="table-data__tool-right" style="padding-left: 2%;" >
            </button>

              <!-- Table with stripped rows -->
        </div>
      
              <table class="table datatable">
                <thead>
                  <tr>
                    <!-- <th scope="col">NO</th> -->
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Durasi kos / bulan</th>
                   
                    <th>  <button class="au-btn au-btn-icon au-btn--green au-btn--small"style="float:right ; background-color:green ;  ">
                          <a href="create.php"><i class="bi bi-plus"style="color:white">Tambah</i></a>
                          </button></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach ($hasil as $rafi3):
                  ?>
                    <tr>
                    <!-- <td>
                        <?php
                          echo $rafi3["id"];
                        ?> -->
                      <td>
                        <?php
                          echo $rafi3["Nama"];
                        ?>
                      </td>
                      <td>
                        <?php
                          echo $rafi3["Umur"];
                        ?>
                      </td>
                      <td>
                        <?php
                          echo $rafi3["Alamat"];
                        ?>
                      </td>
                      <td>
                        <?php
                          echo $rafi3["Durasi"];
                        ?>
                      </td>
                      
                      <td><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <a href="edit.php?id=<?php echo $rafi3["id"]; ?>"><i class="bi bi-pencil">edit</i></a>
                          </button>
                      </td>
                      <!-- <td><i class="bi bi-pencil">edit</i></td> -->
                      <!-- <td><i class="bi bi-trash">delete</i></td> -->
                      <td><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <a href="delete.php?id=<?php echo $rafi3["id"]; ?>"><i class="bi bi-trash">delete</i></a>
                          </button>
                      </td>
                    </tr>
                  <?php
                    endforeach;
                  ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <!-- <script src="assets/vendor/simple-datatables/simple-datatables.js"></script> -->
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <center>
    <div class="copyright" >
      &copy; Copyright <strong><span>HAJIRAFI</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">RafDEV</a>
    </div></center>

</body>

</html>