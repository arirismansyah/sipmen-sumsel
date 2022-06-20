<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
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

<body>

    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto">
                    <div class="text-center">
                        <img src="/images/brand/logo.png" class="header-brand-img" alt="">
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-0">
                        <div class="card-body">
                            <form class="login100-form validate-form" method="POST" action="{{ url('auth') }}">
                                @csrf
                                <span class="login100-form-title">
                                    Login
                                </span>
                                <div class="wrap-input100 validate-input"
                                    data-bs-validate="Valid email is required: ex@abc.xyz">
                                    <input id="input-username" class="input100" type="text" name="username"
                                        placeholder="Username">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="zmdi zmdi-account" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
                                    <input id="input-password" class="input100" type="password" name="password"
                                        placeholder="Password">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="text-end pt-1">
                                    <label class="custom-switch">
                                        <input type="checkbox" id="showPassword" name="showPassword"
                                            class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Show Password</span>
                                    </label>
                                </div>
                                <div class="container-login100-form-btn">
                                    <button type="submit" href="index.html" class="login100-form-btn btn-primary">
                                        Login
                                    </button>
                                </div>

                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="row mb-4">

                                <div class="col col-login mx-auto">
                                    <div class="text-center">
                                        <img src="/images/brand/logo-bpssumsel.png" class="header-brand-img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @include('components.messages')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS -->
    <script src="/js/jquery.sparkline.min.js"></script>

    <!-- CHART-CIRCLE JS -->
    <script src="/js/circle-progress.min.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- INPUT MASK JS -->
    <script src="/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- Color Theme js -->
    <script src="/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="/js/custom.js"></script>

    <script>
        $(document).ready(function() {
            $('#showPassword').click(function(e) {
                if ($('#showPassword').prop('checked') == true) {
                    $('#input-password').attr("type", "text");
                } else {
                    $('#input-password').attr("type", "password");
                }
            });
        });
    </script>

</body>

</html>
