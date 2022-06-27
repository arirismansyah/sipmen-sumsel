<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="id-wilayah" content="{{ Auth::user()->kode_wilayah }}">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Zanex – Bootstrap  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/logo-bps.svg" />

    <!-- TITLE -->
    <title>Sipmen BPS Sumsel</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="/css/style.css" rel="stylesheet" />
    <link href="/css/dark-style.css" rel="stylesheet" />
    <link href="/css/skin-modes.css" rel="stylesheet" />
    <link href="/css/transparent-style.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex align-items-center">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0);"></a>
                        <div class="responsive-logo">
                            <a href="index.html" class="header-logo">
                                <img src="/images/brand/logo-3.png" class="mobile-logo logo-1" alt="logo">
                                <img src="/images/brand/logo.png" class="mobile-logo dark-logo-1" alt="logo">
                            </a>
                        </div>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.html">
                            <img src="/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                        </a>

                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-block d-lg-none">
                                            <a href="javascript:void(0);" class="nav-link icon"
                                                data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown d-md-flex">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- Theme-Layout -->


                                        <div class="dropdown d-md-flex profile-1">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                class="nav-link leading-none d-flex px-1">
                                                <span>
                                                    <img src="/images/logo-bps.svg" alt="profile-user"
                                                        class="avatar  profile-user brround cover-image">
                                                </span>
                                            </a>
                                        </div>

                                        <div class="dropdown d-md-flex">
                                            <a class="nav-link icon" href="{{ url('logout') }}">
                                                <i class="fe fe-log-out"></i>
                                            </a>
                                        </div>
                                        <div class="dropdown d-md-flex header-settings">
                                            <a href="javascript:void(0);" class="nav-link icon "
                                                data-bs-toggle="sidebar-right" data-target=".sidebar-right">
                                                <i class="fe fe-menu"></i>
                                            </a>
                                        </div>
                                        <!-- SIDE-MENU -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <aside class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.html">
                            <img src="/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                            <img src="/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                            <img src="/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Home</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('home') }}"><i
                                        class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">Dashboard
                                        Hasil Input</span></a>
                            </li>
                            @hasanyrole(['admin_prov|super_admin'])
                                <li class="sub-category">
                                    <h3>Admin</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('users') }}"><i
                                            class="side-menu__icon fe fe-users"></i><span
                                            class="side-menu__label">Users</span></a>
                                </li>
                            @endhasanyrole
                            <li class="sub-category">
                                <h3>Pengiriman Dokumen PAPI</h3>
                            </li>
                            <li>
                                <a class="side-menu__item" href="{{ url('input') }}"><i
                                        class="side-menu__icon fe fe-edit"></i><span class="side-menu__label">Input
                                        Pengiriman</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>Settings</h3>
                            </li>
                            <li>
                                <a class="side-menu__item" href="{{ url('setting') }}"><i
                                        class="side-menu__icon fe fe-settings"></i><span
                                        class="side-menu__label">Setting Akun</span></a>
                            </li>

                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </aside>
            </div>
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <div>
                                <h1 class="page-title">Input Pengiriman</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Input Pengiriman</li>
                                </ol>
                            </div>
                        </div>

                        <!-- PAGE-HEADER END -->

                        

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="panel panel-primary">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Menu Input</h3>
                                        </div>
                                        <div class="tab-menu-heading">
                                            <div class="card-body">
                                                <div class="row mb-4">
                                                    @include('components.messages')
                                                </div>

                                                <div class="tabs-menu1 ">
                                                    <!-- Tabs -->
                                                    <ul class="nav panel-tabs">
                                                        <li>
                                                            <a href="#tab1" class="active me-1"
                                                                data-bs-toggle="tab">
                                                                Input Pengiriman
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab2" data-bs-toggle="tab" class="me-1">
                                                                Input Pengiriman By Template
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab3" data-bs-toggle="tab" class="me-1">
                                                                Download Template
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="panel-body tabs-menu-body bg-primary">
                                            <div class="tab-content">

                                                {{-- INPUT DSRT MANUAL --}}
                                                <div class="tab-pane active " id="tab1">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Synchronize Nomor Sipmen</h3>
                                                        </div>

                                                        <div class="card-body pb-2">



                                                            <div id="info-sync"
                                                                class="alert alert-primary fade show mb-4"
                                                                role="alert">
                                                                <strong>Info Message</strong>
                                                                <hr class="message-inner-separator">
                                                                <p id="info-message">Lakukan Synchronize terlebih
                                                                    dahulu
                                                                    untuk mendapatkan
                                                                    nomor surat yang telah diinput pada SIPMEN.
                                                                </p>

                                                            </div>

                                                            <div class="row row-sm text-center">
                                                                <div class="col-lg">
                                                                    <button id="sync-sipmen-api" type="button"
                                                                        class="btn btn-primary btn-md mb-4">
                                                                        <i class="fe fe-refresh-cw me-2"></i>
                                                                        Synchronize Nomor Sipmen Pusat
                                                                    </button>
                                                                </div>

                                                            </div>

                                                            <div class="dimmer active text-center"
                                                                id="loader-sipmen-api" style="display: none">
                                                                <div class="spinner1-lg">
                                                                    <div class="double-bounce1"></div>
                                                                    <div class="double-bounce2"></div>
                                                                </div>
                                                                <label class="text-center text-muted"> Mengambil nomor
                                                                    surat sipmen
                                                                    ...</label>
                                                            </div>

                                                            <div id="info-sync-api" style="display: none"
                                                                class="alert alert-warning fade show mb-4"
                                                                role="alert">
                                                                <strong>Info Message</strong>
                                                                <hr class="message-inner-separator">
                                                                <p id="info-message">Nomor surat belum tersedia, belum
                                                                    ada
                                                                    surat yang
                                                                    diinput ke SIPMEN. Mohon melakukan input pada SIPMEN
                                                                    terlebih dahulu.
                                                                </p>

                                                            </div>

                                                            <div class="row row-sm" id="container-surat-sipmen"
                                                                style="display: none">
                                                                <div class="form-group">
                                                                    <label class="form-label"> Pilih Nomor
                                                                        Surat</label>
                                                                    <select name="nomor_surat" id="input-nomor-surat"
                                                                        class="form-control select2-show-search form-select select2-hidden-accessible"
                                                                        data-placeholder="Choose one" tabindex="-1"
                                                                        aria-hidden="true">
                                                                        <option label="Choose one"></option>

                                                                    </select>

                                                                </div>

                                                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                    <label class="form-label"> PROV</label>
                                                                    <input id="input-kode-prov" name="kode_prov"
                                                                        class="form-control mb-4"
                                                                        placeholder="Kode Prov" readonly=""
                                                                        type="text">
                                                                </div>
                                                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                    <label class="form-label"> KAB</label>
                                                                    <input id="input-kode-kab" name="kode_kab"
                                                                        class="form-control mb-4"
                                                                        placeholder="Kode Kab" readonly=""
                                                                        type="text">
                                                                </div>
                                                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                    <label class="form-label"> KEC</label>
                                                                    <input id="input-kode-kec" name="kode_kec"
                                                                        class="form-control mb-4"
                                                                        placeholder="Kode Kec" readonly=""
                                                                        type="text">
                                                                </div>
                                                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                    <label class="form-label"> DESA</label>
                                                                    <input id="input-kode-desa" name="kode_desa"
                                                                        class="form-control mb-4"
                                                                        placeholder="Kode Desa" readonly=""
                                                                        type="text">
                                                                </div>
                                                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                    <label class="form-label"> BS</label>
                                                                    <input id="input-nbs" name="nbs"
                                                                        class="form-control mb-4"
                                                                        placeholder="Kode BS" readonly=""
                                                                        type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Input Pengiriman</h3>
                                                        </div>
                                                        <div class="card-body">

                                                            <div id="info-input"
                                                                class="alert alert-primary fade show mb-4"
                                                                role="alert">
                                                                <strong>Info Message</strong>
                                                                <hr class="message-inner-separator">
                                                                <p id="info-message">Pilih nomor surat terlebih dahulu
                                                                    untuk
                                                                    dapat melakukan
                                                                    input.
                                                                </p>

                                                            </div>

                                                            <div class="dimmer active text-center"
                                                                id="loader-sipmen-dsrt" style="display: none">
                                                                <div class="spinner1-lg">
                                                                    <div class="double-bounce1"></div>
                                                                    <div class="double-bounce2"></div>
                                                                </div>
                                                                <label class="text-center text-muted"> Mengambil data
                                                                    DSRT
                                                                    ...</label>
                                                            </div>

                                                            <div class="row row-sm" id="container-input-dsrt"
                                                                style="display: none">
                                                                @csrf

                                                                <div class="table-responsive">
                                                                    <table id="table-input-dsrt"
                                                                        class="table border text-nowrap text-md-nowrap table-bordered mg-b-0">
                                                                        <thead
                                                                            class="text-center align-middle table-info">
                                                                            <tr>
                                                                                <th>NO DSRT</th>
                                                                                <th>NUS</th>
                                                                                <th>NAMA SLS</th>
                                                                                <th>NAMA KRT</th>
                                                                                <th>STATUS DOKUMEN</th>
                                                                                <th>STATUS RESPONSE</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="tbody-input-dsrt">

                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <div class="row row-sm text-end">
                                                                    <div class="col-lg">
                                                                        <button id="submit-input-dsrt" type="button"
                                                                            class="btn btn-primary btn-lg mb-4">
                                                                            <i class="fe fe-upload-cloud me-2"></i>
                                                                            SUBMIT
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- INPUT BY TEMPLATE --}}
                                                <div class="tab-pane  " id="tab2">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Synchronize Nomor Sipmen</h3>
                                                        </div>

                                                        <div class="card-body pb-2">

                                                            <div id="info-sync"
                                                                class="alert alert-primary fade show mb-4"
                                                                role="alert">
                                                                <strong>Info Message</strong>
                                                                <hr class="message-inner-separator">
                                                                <p id="info-message">Lakukan Synchronize terlebih
                                                                    dahulu
                                                                    untuk mendapatkan
                                                                    nomor surat yang telah diinput pada SIPMEN.
                                                                </p>

                                                            </div>

                                                            <div class="row row-sm text-center">
                                                                <div class="col-lg">
                                                                    <button id="sync-sipmen-api-template"
                                                                        type="button"
                                                                        class="btn btn-primary btn-md mb-4">
                                                                        <i class="fe fe-refresh-cw me-2"></i>
                                                                        Synchronize Nomor Sipmen Pusat
                                                                    </button>
                                                                </div>

                                                            </div>

                                                            <div class="dimmer active text-center"
                                                                id="loader-sipmen-api-template" style="display: none">
                                                                <div class="spinner1-lg">
                                                                    <div class="double-bounce1"></div>
                                                                    <div class="double-bounce2"></div>
                                                                </div>
                                                                <label class="text-center text-muted"> Mengambil nomor
                                                                    surat sipmen
                                                                    ...</label>
                                                            </div>

                                                            <div id="info-sync-api-template" style="display: none"
                                                                class="alert alert-warning fade show mb-4"
                                                                role="alert">
                                                                <strong>Info Message</strong>
                                                                <hr class="message-inner-separator">
                                                                <p id="info-message">Nomor surat belum tersedia, belum
                                                                    ada
                                                                    surat yang
                                                                    diinput ke SIPMEN. Mohon melakukan input pada SIPMEN
                                                                    terlebih dahulu.
                                                                </p>

                                                            </div>

                                                            <div class="row row-sm"
                                                                id="container-surat-sipmen-template"
                                                                style="display: none">
                                                                <div class="form-group">
                                                                    <label class="form-label"> Pilih Nomor
                                                                        Surat</label>
                                                                    <select name="nomor_surat"
                                                                        id="input-nomor-surat-template"
                                                                        class="form-control select2-show-search form-select select2-hidden-accessible"
                                                                        data-placeholder="Choose one" tabindex="-1"
                                                                        aria-hidden="true">
                                                                        <option label="Choose one"></option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                    <label class="form-label"> PROV</label>
                                                                    <input id="input-kode-prov-template"
                                                                        name="kode_prov" class="form-control mb-4"
                                                                        placeholder="Kode Prov" readonly=""
                                                                        type="text">
                                                                </div>
                                                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                    <label class="form-label"> KAB</label>
                                                                    <input id="input-kode-kab-template"
                                                                        name="kode_kab" class="form-control mb-4"
                                                                        placeholder="Kode Kab" readonly=""
                                                                        type="text">
                                                                </div>
                                                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                    <label class="form-label"> KEC</label>
                                                                    <input id="input-kode-kec-template"
                                                                        name="kode_kec" class="form-control mb-4"
                                                                        placeholder="Kode Kec" readonly=""
                                                                        type="text">
                                                                </div>
                                                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                    <label class="form-label"> DESA</label>
                                                                    <input id="input-kode-desa-template"
                                                                        name="kode_desa" class="form-control mb-4"
                                                                        placeholder="Kode Desa" readonly=""
                                                                        type="text">
                                                                </div>
                                                                <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                    <label class="form-label"> BS</label>
                                                                    <input id="input-nbs-template" name="nbs"
                                                                        class="form-control mb-4"
                                                                        placeholder="Kode BS" readonly=""
                                                                        type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">
                                                                Upload File Excel
                                                            </h3>
                                                        </div>

                                                        <div class="card-body pb-2">

                                                            <div class="row">
                                                                <div id="info-input-template"
                                                                    class="alert alert-primary fade show mb-4"
                                                                    role="alert">
                                                                    <strong>Info Message</strong>
                                                                    <hr class="message-inner-separator">
                                                                    <p id="info-message">Pilih nomor surat terlebih
                                                                        dahulu
                                                                        untuk
                                                                        dapat melakukan
                                                                        upload/input dengan template.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row" id="container-upload-template"
                                                                style="display: none">

                                                                <form action="{{ url('submit-template') }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                            <label class="form-label"> NOMOR SURAT</label>
                                                                            <input id="input-nomor-surat-template2"
                                                                                name="nomor_surat"
                                                                                class="form-control mb-4"
                                                                                placeholder="Nomor Surat" readonly=""
                                                                                type="text">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                            <label class="form-label"> PROV</label>
                                                                            <input id="input-kode-prov-template2"
                                                                                name="kode_prov"
                                                                                class="form-control mb-4"
                                                                                placeholder="Kode Prov" readonly=""
                                                                                type="text">
                                                                        </div>
                                                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                            <label class="form-label"> KAB</label>
                                                                            <input id="input-kode-kab-template2"
                                                                                name="kode_kab"
                                                                                class="form-control mb-4"
                                                                                placeholder="Kode Kab" readonly=""
                                                                                type="text">
                                                                        </div>
                                                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                            <label class="form-label"> KEC</label>
                                                                            <input id="input-kode-kec-template2"
                                                                                name="kode_kec"
                                                                                class="form-control mb-4"
                                                                                placeholder="Kode Kec" readonly=""
                                                                                type="text">
                                                                        </div>
                                                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                            <label class="form-label"> DESA</label>
                                                                            <input id="input-kode-desa-template2"
                                                                                name="kode_desa"
                                                                                class="form-control mb-4"
                                                                                placeholder="Kode Desa" readonly=""
                                                                                type="text">
                                                                        </div>
                                                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                                                            <label class="form-label"> BS</label>
                                                                            <input id="input-nbs-template2"
                                                                                name="nbs"
                                                                                class="form-control mb-4"
                                                                                placeholder="Kode BS" readonly=""
                                                                                type="text">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-5">
                                                                        <div class="form-group mb-4 mb-lg-0">
                                                                            <input id="input-file-template"
                                                                                name="file_template" accept=".xlsx"
                                                                                type="file" class="dropify"
                                                                                data-bs-height="180" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="row row-sm text-end">
                                                                        <div class="col-lg">
                                                                            <button id="submit-input-dsrt-template"
                                                                                type="submit"
                                                                                class="btn btn-primary btn-lg mb-4">
                                                                                <i class="fe fe-upload-cloud me-2"></i>
                                                                                SUBMIT
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane  " id="tab3">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Filter</h3>
                                                        </div>
                                                        <div class="card-body pb-2">
                                                            <div class="row">
                                                                <div id="info-input-template"
                                                                    class="alert alert-primary fade show mb-4"
                                                                    role="alert">
                                                                    <strong>Info Message</strong>
                                                                    <hr class="message-inner-separator">
                                                                    <p id="info-message">
                                                                    <ul class="list-style-1">
                                                                        <li>
                                                                            <p>
                                                                                Filter wilayah sampai level blok sensus
                                                                                sebelum mendownload template excel yang
                                                                                akan digunakan untuk input pengiriman
                                                                                menggunakan template.
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <p>
                                                                                Pada kolom status_dikirim, isikan kode 1
                                                                                apabila dokumen ada dan dikirim, isikan
                                                                                kode 0 jika dokumen tidak ada/tidak
                                                                                dikirim.
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <p>
                                                                                Pada kolom status_response, isikan kode
                                                                                1 apabila sample berhasil diwawancarai,
                                                                                isikan kode 0 sample tidak berhasil
                                                                                diwawancarai.
                                                                            </p>
                                                                        </li>
                                                                    </ul>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            {{-- filter --}}
                                                            <form id="filter-form"
                                                                action="{{ url('get-input-template') }}"
                                                                method="get">
                                                                <div class="row row-sm">
                                                                    <div class="form-group col-lg mg-t-10 mg-lg-t-0">
                                                                        <label class="form-label"> KAB/KOTA</label>
                                                                        <select name="kode_kab"
                                                                            id="input-kode-kab-filter"
                                                                            class="form-control select2-show-search form-select"
                                                                            data-placeholder="Choose one">
                                                                            <option label="Choose one"></option>
                                                                            @foreach ($data_kab as $kab)
                                                                                <option value="{{ $kab->kode_kab }}">
                                                                                    {{ '[' . $kab->kode_prov . $kab->kode_kab . '] ' . $kab->nama_kab }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-lg mg-t-10 mg-lg-t-0">
                                                                        <label class="form-label"> KEC</label>
                                                                        <select name="kode_kec"
                                                                            id="input-kode-kec-filter"
                                                                            class="form-control select2-show-search form-select"
                                                                            data-placeholder="Choose one">
                                                                            <option label="Choose one"></option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="row row-sm">

                                                                    <div class="form-group col-lg mg-t-10 mg-lg-t-0">
                                                                        <label class="form-label"> DESA</label>
                                                                        <select name="kode_desa"
                                                                            id="input-kode-desa-filter"
                                                                            class="form-control select2-show-search form-select"
                                                                            data-placeholder="Choose one">
                                                                            <option label="Choose one"></option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-lg mg-t-10 mg-lg-t-0">
                                                                        <label class="form-label"> NBS</label>
                                                                        <select name="nbs" id="input-nbs-filter"
                                                                            class="form-control select2-show-search form-select"
                                                                            data-placeholder="Choose one">
                                                                            <option label="Choose one"></option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="row row-sm align-bottom justify-content-bottom mb-4">
                                                                    <div class="col-lg align-middle">
                                                                        <button type="submit"
                                                                            class="btn btn-success">
                                                                            <i
                                                                                class="fe fe-download me-2 "></i>Download
                                                                            Template
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </form>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- ROW-1 OPEN -->
                        <div class="row"></div>

                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>

        <!-- Sidebar-right -->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="panel panel-primary card mb-0 shadow-none border-0">
                <div class="tab-menu-heading border-0 d-flex p-3">
                    <div class="card-title mb-0">Account</div>
                    <div class="card-options ms-auto">
                        <a href="javascript:void(0);" class="sidebar-icon text-end float-end me-1"
                            data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i
                                class="fe fe-x text-white"></i></a>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
                    <div class="tabs-menu border-bottom">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i
                                        class="fe fe-user me-1"></i> Profile</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="side1">
                            <div class="card-body text-center">
                                <div class="dropdown user-pro-body">
                                    <div class="">
                                        <img alt="user-img" class="avatar avatar-xl brround mx-auto text-center"
                                            src="/images/faces/6.jpg"><span
                                            class="avatar-status profile-status bg-green"></span>
                                    </div>
                                    <div class="user-info mg-t-20">
                                        <h6 class="fw-semibold  mt-2 mb-0">{{ Auth::user()->name }}</h6>
                                        <span class="mb-0 text-muted fs-12">{{ Auth::user()->kode_wilayah }}</span>
                                    </div>
                                </div>
                            </div>


                            <a class="dropdown-item d-flex border-bottom" href="editprofile.html">
                                <div class="d-flex"><i class="fe fe-settings me-3 tx-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">Account Settings</h6>
                                        <p class="tx-12 mb-0 text-muted">Settings Information</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex border-bottom" href="{{ route('logout') }}">
                                <div class="d-flex"><i class="fe fe-power me-3 tx-20 text-muted"></i>
                                    <div class="pt-1">
                                        <h6 class="mb-0">Sign Out</h6>
                                        <p class="tx-12 mb-0 text-muted">Account Signout</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/Sidebar-right-->

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © 2022 <a href="javascript:void(0);">Sipmen BPS Sumsel</a>. Designed with <span
                            class="fa fa-heart text-danger"></span> by IPDS BPS Sumsel
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->
    </div>

    <div class="modal fade" id="modal-loading-submit">
        <div class="modal-dialog modal-dialog-centered text-center " role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body text-center p-4">
                    <div class="dimmer active text-center" id="loader-sipmen-api">
                        <div class="spinner1-lg">
                            <div class="double-bounce1"></div>
                            <div class="double-bounce2"></div>
                        </div>
                        <label class="text-center text-muted"> Submit DSRT
                            ...</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="/js/jquery.sparkline.min.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="/js/circle-progress.min.js"></script>

    <!-- INPUT MASK JS-->
    <script src="/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="/plugins/sidemenu/sidemenu.js"></script>

    <!-- Sticky js -->
    <script src="/js/sticky.js"></script>

    <!-- SIDEBAR JS -->
    <script src="/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="/plugins/p-scroll/pscroll.js"></script>
    <script src="/plugins/p-scroll/pscroll-1.js"></script>

    <!-- Color Theme js -->
    <script src="/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="/js/custom.js"></script>


    <!-- FILE UPLOADES JS -->
    <script src="/plugins/fileuploads/js/fileupload.js"></script>
    <script src="/plugins/fileuploads/js/file-upload.js"></script>

    <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="/plugins/fancyuploder/jquery.ui.widget.js"></script>
    <script src="/plugins/fancyuploder/jquery.fileupload.js"></script>
    <script src="/plugins/fancyuploder/jquery.iframe-transport.js"></script>
    <script src="/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
    <script src="/plugins/fancyuploder/fancy-uploader.js"></script>


    <!-- SELECT2 JS -->
    <script src="/plugins/select2/select2.full.min.js"></script>

    <!-- BOOTSTRAP-DATERANGEPICKER JS -->
    <script src="/plugins/bootstrap-daterangepicker/moment.min.js"></script>
    <script src="/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

    <!-- INTERNAL Sumoselect js-->
    <script src="/plugins/sumoselect/jquery.sumoselect.js"></script>

    <!-- TIMEPICKER JS -->
    <script src="/plugins/time-picker/jquery.timepicker.js"></script>
    <script src="/plugins/time-picker/toggles.min.js"></script>

    <!-- INTERNAL intlTelInput js-->
    <script src="/plugins/intl-tel-input-master/intlTelInput.js"></script>
    <script src="/plugins/intl-tel-input-master/country-select.js"></script>
    <script src="/plugins/intl-tel-input-master/utils.js"></script>

    <!-- INTERNAL jquery transfer js-->
    <script src="/plugins/jQuerytransfer/jquery.transfer.js"></script>

    <!-- INTERNAL multi js-->
    <script src="/plugins/multi/multi.min.js"></script>

    <!-- DATEPICKER JS -->
    <script src="/plugins/date-picker/date-picker.js"></script>
    <script src="/plugins/date-picker/jquery-ui.js"></script>
    <script src="/plugins/input-mask/jquery.maskedinput.js"></script>

    <!-- MULTI SELECT JS-->
    <script src="/plugins/multipleselect/multiple-select.js"></script>
    <script src="/plugins/multipleselect/multi-select.js"></script>

    <!-- FORMELEMENTS JS -->
    <script src="/js/formelementadvnced.js"></script>
    <script src="/js/form-elements.js"></script>

    <!-- SWEET-ALERT JS -->
    <script src="/plugins/sweet-alert/sweetalert.min.js"></script>

</body>

{{-- SCRIPT SYNC API --}}

{{-- -- -- INPUT MANUAL --}}
<script>
    $(document).ready(function() {
        $('#sync-sipmen-api').on('click', function() {
            $('#container-surat-sipmen').hide();
            $('#info-sync-api').hide();

            // loading
            $('#loader-sipmen-api').show();

            $.ajax({
                method: "GET",
                url: "{{ url('get-surat-db') }}",
                success: function(response) {
                    console.log(response);
                    // hide loading
                    $('#loader-sipmen-api').hide();

                    if (response.length > 0) {
                        // mounting select

                        response.forEach(element => {
                            var option =
                                '<option value="' + element['nomor_surat'] +
                                '" prov="' + element['kode_prov'] +
                                '" kab="' + element['kode_kab'] + '" kec="' +
                                element[
                                    'kode_kec'] +
                                '" desa="' + element['kode_desa'] + '" nbs="' +
                                element['nbs'] + '">' + element[
                                    'nomor_surat'] + ' -- [KEC:' + element[
                                    'kode_kec'] + ' DESA:' + element[
                                    'kode_desa'] + ' NBS:' + element['nbs'] +
                                '] </option>';

                            $('[name = "nomor_surat"]').append(option);
                        });

                        // display form
                        $('#container-surat-sipmen').show();

                    } else {
                        // display warning
                        $('#info-sync-api').show();
                    }

                }
            })
        });
    });
</script>
{{-- -- -- INPUT TEMPLATE --}}
<script>
    $(document).ready(function() {
        $('#sync-sipmen-api-template').on('click', function() {
            $('#container-surat-sipmen-template').hide();
            $('#info-sync-api-template').hide();

            // loading
            $('#loader-sipmen-api-template').show();

            $.ajax({
                method: "GET",
                url: "{{ url('get-surat-db') }}",
                success: function(response) {
                    console.log(response);
                    // hide loading
                    $('#loader-sipmen-api-template').hide();

                    if (response.length > 0) {
                        // mounting select

                        response.forEach(element => {
                            var option =
                                '<option value="' + element['nomor_surat'] +
                                '" prov="' + element['kode_prov'] +
                                '" kab="' + element['kode_kab'] + '" kec="' +
                                element[
                                    'kode_kec'] +
                                '" desa="' + element['kode_desa'] + '" nbs="' +
                                element['nbs'] + '">' + element[
                                    'nomor_surat'] + ' -- [KEC:' + element[
                                    'kode_kec'] + ' DESA:' + element[
                                    'kode_desa'] + ' NBS:' + element['nbs'] +
                                '] </option>';

                            $('#input-nomor-surat-template').append(option);
                        });

                        // display form
                        $('#container-surat-sipmen-template').show();

                    } else {
                        // display warning
                        $('#info-sync-api-template').show();

                    }

                }
            })
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#sync-sipmen-api').on('click', function() {
            $('#container-surat-sipmen').hide();
            $('#info-sync-api').hide();

            // loading
            $('#loader-sipmen-api').show();

            $.ajax({
                type: "GET",
                // dataType: 'json',
                cors: true,
                contentType: 'application/json',
                secure: true,
                headers: {
                    'Access-Control-Allow-Origin': '*',
                },
                url: "https://sipmen.bps.go.id/api1600",
                success: function(response) {
                    console.log(response);
                }
            })
        });
    });
</script>

{{-- SELECT NOMOR SURAT --}}
{{-- -- -- INPUT MANUAL --}}
<script>
    $(document).ready(function() {
        $('#input-nomor-surat').on('change', function() {
            $('#container-input-dsrt').hide();
            $('#info-input').hide();

            var nomor_surat = $('input-nomor-surat').val();
            var kode_prov = $('option:selected', this).attr('prov');
            var kode_kab = $('option:selected', this).attr('kab');
            var kode_kec = $('option:selected', this).attr('kec');
            var kode_desa = $('option:selected', this).attr('desa');
            var nbs = $('option:selected', this).attr('nbs');

            $('#input-kode-prov').val(kode_prov);
            $('#input-kode-kab').val(kode_kab);
            $('#input-kode-kec').val(kode_kec);
            $('#input-kode-desa').val(kode_desa);
            $('#input-nbs').val(nbs);


            // loading input sipmen
            $('#loader-sipmen-dsrt').show();

            // get data dsrt
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: "POST",
                url: "{{ url('get-sample-dsrt') }}",
                data: {
                    'kode_prov': kode_prov,
                    'kode_kab': kode_kab,
                    'kode_kec': kode_kec,
                    'kode_desa': kode_desa,
                    'nbs': nbs,
                },
                success: function(response) {
                    console.log(response);
                    // hide loading
                    $('#loader-sipmen-dsrt').hide();

                    // reset table input
                    $('#tbody-input-dsrt').html("");


                    response.forEach(element => {
                        var row =
                            `<tr class="row-dsrt">
                                        
                                        <td id="no_dsrt" class="align-middle text-center">` + element['no_dsrt'] +
                            `</td>
                                        <td id="nus" class="align-middle text-center">` + element['nus'] +
                            `</td>
                                        <td class="align-middle">
                                            <div class="input-group">
                                                <input id="input-nama-sls" readonly name="nama_sls[]" type="text" class="form-control" placeholder="Nama SLS" value="` +
                            element['nama_sls'] +
                            `">
                                                <button id="edit-nama-sls" class="btn btn-success">
                                                    <i class="fe fe-edit-3"></i>
                                                </button>
                                            </div>

                                        </td>
                                        <td class="align-middle">
                                            <div class="input-group">
                                                <input id="input-nama-krt" readonly name="nama_krt[]" type="text" class="form-control" placeholder="Nama KRT" value="` +
                            element['nama_krt'] +
                            `">
                                                <button id="edit-nama-krt" class="btn btn-success">
                                                    <i class="fe fe-edit-3"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control custom-radio">
                                                    <input id="status-dok"  type="radio" class="custom-control-input" name="status_dok_` +
                            element['nus'] +
                            `" value="0">
                                                    <span class="custom-control-label">Tidak ada</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input id="status-dok"  type="radio" class="custom-control-input" name="status_dok_` +
                            element['nus'] +
                            `" value="1">
                                                    <span class="custom-control-label">Ada</span>
                                                </label>
                                                
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control custom-radio">
                                                    <input id="status-response" type="radio" class="custom-control-input" name="status_response_` +
                            element['nus'] +
                            `" value="0">
                                                    <span class="custom-control-label">Non Response</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input id="status-response"  type="radio" class="custom-control-input" name="status_response_` +
                            element['nus'] + `" value="1">
                                                    <span class="custom-control-label">Response</span>
                                                </label>
                                                
                                            </div>
                                        </td>
                                    </tr>`;

                        $('#tbody-input-dsrt').append(row);
                    });

                    $('#container-input-dsrt').show();

                }
            })


        });
    });
</script>
{{-- -- -- INPUT TEMPLATE --}}
<script>
    $(document).ready(function() {
        $('#input-nomor-surat-template').on('change', function() {
            $('#container-upload-template').show();

            var nomor_surat = $('#input-nomor-surat-template').val();
            var kode_prov = $('option:selected', this).attr('prov');
            var kode_kab = $('option:selected', this).attr('kab');
            var kode_kec = $('option:selected', this).attr('kec');
            var kode_desa = $('option:selected', this).attr('desa');
            var nbs = $('option:selected', this).attr('nbs');

            $('#input-kode-prov-template').val(kode_prov);
            $('#input-kode-kab-template').val(kode_kab);
            $('#input-kode-kec-template').val(kode_kec);
            $('#input-kode-desa-template').val(kode_desa);
            $('#input-nbs-template').val(nbs);

            $('#input-kode-prov-template2').val(kode_prov);
            $('#input-kode-kab-template2').val(kode_kab);
            $('#input-kode-kec-template2').val(kode_kec);
            $('#input-kode-desa-template2').val(kode_desa);
            $('#input-nbs-template2').val(nbs);
            $('#input-nomor-surat-template2').val(nomor_surat);

            $('#container-upload-template').show();




        });
    });
</script>

{{-- EDIT NAMA KRT --}}
<script>
    $(document).ready(function() {
        $('#table-input-dsrt').on('click', '#edit-nama-krt', function() {
            $(this).siblings('#input-nama-krt').prop('readonly', false);
        })
    });
</script>

{{-- EDIT NAMA SLS --}}
<script>
    $(document).ready(function() {
        $('#table-input-dsrt').on('click', '#edit-nama-sls', function() {
            $(this).siblings('#input-nama-sls').prop('readonly', false);
        })
    });
</script>

{{-- SUBMIT DSRT MANUAL --}}
<script>
    $(document).ready(function() {
        $('#submit-input-dsrt').on('click', function() {
            console.log('submit clicked');

            var nomor_surat = $('[name = "nomor_surat"]').val();
            var kode_prov = $('#input-kode-prov').val();
            var kode_kab = $('#input-kode-kab').val();
            var kode_kec = $('#input-kode-kec').val();
            var kode_desa = $('#input-kode-desa').val();
            var nbs = $('#input-nbs').val();

            var dataRows = []

            var submitting = true;

            $('#table-input-dsrt tbody tr').each(function() {
                var currentRow = $(this);
                var no_dsrt = currentRow.find('#no_dsrt').text();
                var nus = currentRow.find('#nus').text();
                var nama_sls = currentRow.find('#input-nama-sls').val();
                var nama_krt = currentRow.find('#input-nama-krt').val();
                var status_dok = currentRow.find("#status-dok:checked").val();
                var status_response = currentRow.find("#status-response:checked").val();

                if (nus == null || nama_sls == null || nama_krt == null || status_dok == null ||
                    status_response == null) {
                    $('#modal-loading-submit').modal('hide');

                    swal({
                        title: "Alert",
                        text: "Isian input harus terisi lengkap, tidak boleh ada yang kosong.",
                        type: "error",
                        // showCancelButton: true,
                        confirmButtonText: 'Ok',

                    });
                    submitting = false;
                    return false;
                } else {


                    var object = {};
                    object.kode_prov = kode_prov;
                    object.kode_kab = kode_kab;
                    object.kode_kec = kode_kec;
                    object.kode_desa = kode_desa;
                    object.nbs = nbs;
                    object.no_dsrt = no_dsrt;
                    object.nus = nus;
                    object.nama_sls = nama_sls;
                    object.nama_krt = nama_krt;
                    object.nama_krt = nama_krt;
                    object.status_dikirim = status_dok;
                    object.status_response = status_response;
                    object.nomor_surat = nomor_surat;

                    dataRows.push(object);
                }
            });

            if (submitting == true) {
                console.log('ayo submit');
                $('#modal-loading-submit').modal('show');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: "POST",
                    url: "{{ url('submit-dsrt') }}",
                    data: {
                        'data_dsrt': dataRows,
                    },
                    success: function(response) {
                        console.log(response);
                        // hide loading
                        $('#modal-loading-submit').modal('hide');

                        if (response == 'success') {
                            swal({
                                    title: "Submited",
                                    text: "Submit data DSRT sukses",
                                    type: "success",
                                    showCancelButton: false,
                                    confirmButtonText: 'OK',
                                },
                                function(isConfirm) {

                                    if (isConfirm) {
                                        window.location.href = "{{ url('input') }}";
                                    } else {
                                        window.location.href = "{{ url('input') }}";
                                    }
                                });
                        }

                    },
                    fail: function(data) {
                        console.log(data);
                        console.log(data.debug);
                        data.error / data.debug;
                    }
                })
            } else {
                $('#modal-loading-submit').modal('hide');

            }






        })
    });
</script>

{{-- FILTER TEMPLATE --}}

{{-- fetch kec --}}
<script>
    $(document).ready(function() {
        $('#input-kode-kab-filter').on('change', function() {
            console.log('changed');
            var kode_kab = $('#input-kode-kab-filter').val();
            console.log(kode_kab);

            $('#input-kode-kec-filter').prop('disabled', true);
            $('#input-kode-desa-filter').prop('disabled', true);
            $('#input-nbs-filter').prop('disabled', true);

            // reset select
            $('#input-kode-kec-filter').html('<option label="Choose one"></option>');
            $('#input-kode-desa-filter').html('<option label="Choose one"></option>');
            $('#input-nbs-filter').html('<option label="Choose one"></option>');


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: "POST",
                url: "{{ url('get-kecs') }}",
                data: {
                    'kode_kab': kode_kab,
                },
                success: function(response) {
                    console.log(response);
                    // hide loading


                    $('#input-kode-kec-filter').prop('disabled', false);

                    response.forEach(element => {
                        var option = '<option value="' + element['kode_kec'] +
                            '"> [' + element['kode_kec'] + '] ' + element[
                                'nama_kec'] + '</option>';

                        $('#input-kode-kec-filter').append(option);
                    });


                }
            })


        });
    });
</script>

{{-- fetch desa --}}
<script>
    $(document).ready(function() {
        $('#input-kode-kec-filter').on('change', function() {
            console.log('changed');
            var kode_kab = $('#input-kode-kab-filter').val();
            var kode_kec = $('#input-kode-kec-filter').val();

            $('#input-kode-desa-filter').prop('disabled', true);
            $('#input-nbs-filter').prop('disabled', true);

            // reset select
            $('#input-kode-desa-filter').html(
                '<option label="Choose one"></option>');

            if (kode_kab != null && kode_kec != null) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: "POST",
                    url: "{{ url('get-desas') }}",
                    data: {
                        'kode_kab': kode_kab,
                        'kode_kec': kode_kec,
                    },
                    success: function(response) {
                        console.log(response);
                        // hide loading

                        $('#input-kode-desa-filter').prop('disabled', false);
                        $('#input-nbs-filter').prop('disabled', true);

                        response.forEach(element => {
                            var option = '<option value="' + element['kode_desa'] +
                                '"> [' + element['kode_desa'] + '] ' + element[
                                    'nama_desa'] + '</option>';

                            $('#input-kode-desa-filter').append(option);
                        });


                    }
                })

            }



        });
    });
</script>

{{-- fetch nbs --}}
<script>
    $(document).ready(function() {
        $('#input-kode-desa-filter').on('change', function() {
            console.log('changed');
            var kode_kab = $('#input-kode-kab-filter').val();
            var kode_kec = $('#input-kode-kec-filter').val();
            var kode_desa = $('#input-kode-desa-filter').val();

            $('#input-nbs-filter').prop('disabled', true);

            // reset select
            $('#input-nbs-filter').html('<option label="Choose one"></option>');

            if (kode_kab != null && kode_kec != null && kode_desa != null) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: "POST",
                    url: "{{ url('get-nbs') }}",
                    data: {
                        'kode_kab': kode_kab,
                        'kode_kec': kode_kec,
                        'kode_desa': kode_desa,
                    },
                    success: function(response) {
                        console.log(response);
                        // hide loading

                        $('#input-nbs-filter').prop('disabled', false);

                        response.forEach(element => {
                            var option = '<option value="' + element['nbs'] +
                                '"> [' + element['nbs'] + '] ' + element[
                                    'nbs'] + '</option>';

                            $('#input-nbs-filter').append(option);
                        });

                    }
                })

            }



        });
    });
</script>


</html>
