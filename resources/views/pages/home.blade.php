<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                        class="side-menu__label">Dashboard Hasil Input</span></a>
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
                                <h1 class="page-title">Home</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                                </ol>
                            </div>
                            <div class="ms-auto pageheader-btn">
                                <a href="javascript:void(0);" class="btn btn-success btn-icon text-white">
                                    <span>
                                        <i class="fe fe-log-in"></i>
                                    </span> Export Rincian DSRT
                                </a>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dokumen yang telah dikirim</h3>
                                    </div>
                                    <div class="card-body pb-2">


                                        {{-- filter --}}


                                        <form id="filter-form" action="{{ url('home') }}" method="get">
                                            <div class="row row-sm">

                                                <div class="form-group col-lg mg-t-10 mg-lg-t-0">
                                                    <label class="form-label"> KAB/KOTA</label>
                                                    <select name="kode_kab" id="input-kode-kab"
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
                                                    <select name="kode_kec" id="input-kode-kec"
                                                        class="form-control select2-show-search form-select"
                                                        data-placeholder="Choose one">
                                                        <option label="Choose one"></option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row row-sm">

                                                <div class="form-group col-lg mg-t-10 mg-lg-t-0">
                                                    <label class="form-label"> DESA</label>
                                                    <select name="kode_desa" id="input-kode-desa"
                                                        class="form-control select2-show-search form-select"
                                                        data-placeholder="Choose one">
                                                        <option label="Choose one"></option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg mg-t-10 mg-lg-t-0">
                                                    <label class="form-label"> NBS</label>
                                                    <select name="nbs" id="input-nbs"
                                                        class="form-control select2-show-search form-select"
                                                        data-placeholder="Choose one">
                                                        <option label="Choose one"></option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row row-sm align-bottom justify-content-bottom">
                                                <div class="col-lg mg-t-10 mg-lg-t-0 align-middle">
                                                    <input id="input-nomor-surat" name="nomor_surat"
                                                        class="form-control mb-4" placeholder="Nomor Surat"
                                                        type="text">
                                                </div>

                                                <div class="col-lg align-middle">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fe fe-search me-2 "></i>Search
                                                    </button>
                                                </div>

                                            </div>

                                        </form>


                                        {{-- table --}}
                                        <div class="row row-sm">
                                            @if (count($data_dsrt_dikirim) > 0)
                                                <div class="table-responsive">
                                                    <table id="table-dashboard-dsrt"
                                                        class="table border text-nowrap text-md-nowrap table-bordered mg-b-0">
                                                        <thead class="text-center align-middle table-info">
                                                            <tr>
                                                                <th class="text-center align-middle" rowspan="2">KODE
                                                                    WILAYAH</th>
                                                                <th class="text-center align-middle" rowspan="2">KEC
                                                                </th>
                                                                <th class="text-center align-middle" rowspan="2">DESA
                                                                </th>
                                                                <th class="text-center align-middle" rowspan="2">NBS
                                                                </th>
                                                                <th class="text-center align-middle" rowspan="2">NO
                                                                    SURAT
                                                                </th>
                                                                <th class="text-center align-middle" colspan="2">JUMLAH
                                                                    DOK RUMAH TANGGA</th>
                                                                <th class="text-center align-middle" rowspan="2">
                                                                    LAMPIRAN
                                                                </th>
                                                            </tr>
                                                            <tr>

                                                                <td class="text-center align-middle">DIKIRIM</td>
                                                                <td class="text-center align-middle">RESPONSE</td>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data_dsrt_dikirim as $surat)
                                                                <tr>
                                                                    <td class="text-center align-middle">
                                                                        {{ $surat->kode_prov . $surat->kode_kab }}
                                                                    </td>
                                                                    <td class="text-center align-middle">
                                                                        {{ $surat->kode_kec }}</td>
                                                                    <td class="text-center align-middle">
                                                                        {{ $surat->kode_desa }}</td>
                                                                    <td class="text-center align-middle">
                                                                        {{ $surat->nbs }}</td>
                                                                    <td class="text-center align-middle">
                                                                        {{ $surat->nomor_surat }}</td>
                                                                    <td class="text-end align-middle">
                                                                        {{ $surat->jml_dikirim }}</td>
                                                                    <td class="text-end align-middle">
                                                                        {{ $surat->jml_response }}</td>
                                                                    <td class="text-center">
                                                                        <a target="blank_"
                                                                            href="{{ url('lampiran?nomor_surat=') }}{{ $surat->nomor_surat }}{{'&kode_wilayah='.$surat->kode_prov.$surat->kode_kab.$surat->kode_kec.$surat->kode_desa.$surat->nbs}}"
                                                                            type="button"
                                                                            class="btn btn-icon  btn-primary"><i
                                                                                class="fe fe-file"></i></a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    {{ $data_dsrt_dikirim->links() }}
                                                </div>
                                            @else
                                                <div id="info-input" class="alert alert-info fade show mb-4"
                                                    role="alert">
                                                    <strong>Info Message</strong>
                                                    <hr class="message-inner-separator">
                                                    <p id="info-message">Belum ada data DSRT yang diinput.
                                                    </p>
                                                </div>
                                            @endif

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

{{-- fetch kec --}}
<script>
    $(document).ready(function() {
        $('[name = "kode_kab"]').on('change', function() {
            console.log('changed');
            var kode_kab = $('[name = "kode_kab"]').val();

            // reset select
            $('[name = "kode_kec"]').html('<option label="Choose one"></option>');
            $('[name = "kode_desa"]').html('<option label="Choose one"></option>');
            $('[name = "nbs"]').html('<option label="Choose one"></option>');


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

                    response.forEach(element => {
                        var option = '<option value="' + element['kode_kec'] +
                            '"> [' + element['kode_kec'] + '] ' + element[
                                'nama_kec'] + '</option>';

                        $('[name = "kode_kec"]').append(option);
                    });


                }
            })


        });
    });
</script>

{{-- fetch desa --}}
<script>
    $(document).ready(function() {
        $('[name = "kode_kec"]').on('change', function() {
            console.log('changed');
            var kode_kab = $('[name = "kode_kab"]').val();
            var kode_kec = $('[name = "kode_kec"]').val();

            // reset select
            $('[name = "kode_desa"]').html(
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

                        response.forEach(element => {
                            var option = '<option value="' + element['kode_desa'] +
                                '"> [' + element['kode_desa'] + '] ' + element[
                                    'nama_desa'] + '</option>';

                            $('[name = "kode_desa"]').append(option);
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
        $('[name = "kode_desa"]').on('change', function() {
            console.log('changed');
            var kode_kab = $('[name = "kode_kab"]').val();
            var kode_kec = $('[name = "kode_kec"]').val();
            var kode_desa = $('[name = "kode_desa"]').val();

            // reset select
            $('[name = "nbs"]').html('<option label="Choose one"></option>');

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

                        response.forEach(element => {
                            var option = '<option value="' + element['nbs'] +
                                '"> [' + element['nbs'] + '] ' + element[
                                    'nbs'] + '</option>';

                            $('[name = "nbs"]').append(option);
                        });


                    }
                })

            }



        });
    });
</script>

</html>
