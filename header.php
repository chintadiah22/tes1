<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KIKI MART</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="asset-penjualan/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="asset-penjualan/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="asset-penjualan/dist/css/adminlte.min.css">
    <!-- Remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Logo -->
    <link rel="icon" type="image/x-icon" href="asset-penjualan/dist/img/brand.jpeg">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
    <style type="text/css">
        .chartBox {
            width: 700px;
        }
    </style>

</head>

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center" onload="getDataPenjualan">
            <img class="animation__wobble" src="asset-penjualan/dist/img/brand.jpeg" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">

                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="login.php" onclick="return confirm('Yakin Ingin Keluar?')">Logout</a>
                        </div>
                    </div>

                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="asset-penjualan/dist/img/brand.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-ligth">KIKI MART</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                        <li class="nav-item bg-danger mt-1">
                            <a href="index.php" class="nav-link">
                                <i class="ri-dashboard-3-line"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item mt-1 ">
                            <a href="#" class="nav-link active bg-success mt-1">
                                <i class="ri-outlet-2-line"></i>
                                <p>
                                    Master Data
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="data-barang.php" class="nav-link">
                                        <p>Data Barang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="data-konsumen.php" class="nav-link">
                                        <p>Data Konsumen</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <!-- <li class="nav-item mt-1 ">
                            <a href="#" class="nav-link active bg-success mt-1">
                                <i class="ri-outlet-2-line"></i>
                                <p>
                                    Outlet
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="tambah.php" class="nav-link">
                                        <p>Tambahkan Outlet Baru</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tampilkan-dataoutlet.php" class="nav-link">
                                        <p>Tampilkan Data Outlet</p>
                                    </a>
                                </li>

                            </ul>
                        </li> -->

                        <li class="nav-item mt-1 ">
                            <a href="laporan3.php" class="nav-link active bg-warning mt-1">
                                <i class="ri-outlet-2-line"></i>
                                <p>
                                    Laporan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="data-penjualan.php" class="nav-link">
                                        <p>Data penjualan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="data-terlaris.php" class="nav-link">
                                        <p>Rangking item terlaris</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="piutangjatuhtempo.php" class="nav-link">
                                        <p>piutang Jatuh Tempo</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="hutangjatuhtempo.php" class="nav-link">
                                        <p>Hutang Jatuh Tempo</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="laporanpenjualan.php" class="nav-link">
                                        <p> Laporan Kasir </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="laporankategori.php" class="nav-link">
                                        <p> Laporan Kategori </p>
                                    </a>
                                </li>
                                

                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->

        </aside>