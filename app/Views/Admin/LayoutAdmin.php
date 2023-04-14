<!DOCTYPE html>
<html lang="PT-br">
<meta charset="utf-8" />

<head>
  <base href="/" />
  <meta charset="utf-8">
  <link rel="icon" type="images/png" href="images/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administração Mustache</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>Plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>Plugins/fontawesome-free/css/solid.css">
  <link rel="stylesheet" href="<?= base_url() ?>Plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>Plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>Plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>Plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>Plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>dist/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>Plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>Plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?= base_url() ?>Plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>Plugins/EndarkerJS/dist/endarkerjs.min.css">
  </link>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="images/logo.png" alt="Coletek" height="60" width="130">
</div>
<nav class="main-header navbar navbar-expand navbar-dark fixed-top">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Home" role="button"><i class="fas fa-home"></i></a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item nav-link d-none d-sm-block">
    </li>
    <li class="nav-item nav-link d-none d-sm-block">|</li>
    <li class="nav-item">
      <a class="nav-link" href="Sair">
        <i class="fas fa-sign-out-alt mx-1"></i></i> Sair
      </a>
    </li>
  </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="sidebar">
    <div class="mt-3 pb-3 mb-3 d-flex justify-content-center">
      <div class="">
        <a href="Home"><img src="images/logo.png" class="" alt="User Image" width="100%"></a>
      </div>
    </div>
    <hr>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-is-opening ">
          <a href="javascript:void()" class="nav-link text-bold level-one">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
              class="bi bi-patch-plus-fill" viewBox="0 0 16 16">
              <path
                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
            </svg>
            &nbsp
            <p>
              Cadastro
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="CadastroCliente" class="nav-link ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z" />
                </svg>
                &nbsp
                <p> Cadastrar Produto</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item menu-is-opening ">
          <a href="javascript:void()" class="nav-link text-bold level-one">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
              class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
              <path
                d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z" />
            </svg>
            &nbsp
            <p>
              Relatórios
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="RelatorioDeVendas" class="nav-link ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop"
                  viewBox="0 0 16 16">
                  <path
                    d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                </svg>
                &nbsp
                <p>Relatório de Vendas</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</aside>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="content-wrapper content-web ">
    <section class="content">
      <div class="container-fluid">
        <?php $this->renderSection('admin_content'); ?>
      </div>
    </section>
  </div>
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
<script src="<?= base_url() ?>Plugins/jquery/jquery.min.js"></script>
<!-- <script src="<?= base_url() ?>Plugins/jquery-ui/jquery-ui.min.js"></script> -->
<script src="<?= base_url() ?>Plugins/EndarkerJS/dist/endarkerjs.min.js"></script>
<script src="<?= base_url() ?>Plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>Plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>Plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>Plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>Plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>Plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>Plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>Plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>Plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>Plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>Plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>Plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="<?= base_url() ?>Plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?= base_url() ?>Plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url() ?>Plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?= base_url() ?>Plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= base_url() ?>Plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>Plugins/jquery-validation/jquery.validate.pt-br.js"></script>
<script src="<?= base_url() ?>js/adminlte.js"></script>
<script src="<?= base_url() ?>js/all.js<?php //echo filemtime(''.base_url().'js/all.js'); ?>"></script>

</html>