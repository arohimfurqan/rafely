<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets') ?>/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url('assets') ?>/img/favicon.png">
  <title>
    SIALAP | <?= $this->renderSection('title') ?>
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../css/nucleo-icons.css" rel="stylesheet" />
  <link href="../css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?= base_url('assets') ?>/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url('assets') ?>/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <style>
    .bg-gradient-primary {
      background-image: linear-gradient(310deg, #1b2562 0%, #a11111 100%);
    }
  </style>
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">

  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <?= $this->renderSection('content') ?>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="<?= base_url('assets') ?>/js/core/popper.min.js"></script>
  <script src="<?= base_url('assets') ?>/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url('assets') ?>/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url('assets') ?>/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('assets') ?>/js/argon-dashboard.min.js?v=2.0.4"></script>
  <script>
    <?php
    if (session()->getFlashdata('akses')) { ?>
      alert('<?= session()->getFlashdata('akses') ?>');
    <?php }
    ?>
  </script>
</body>

</html>