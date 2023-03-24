<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- <meta charset="utf-8"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laxcon </title>
    <meta content="Zak Mobile App" name="description" />
    <meta content="themepassion" name="author" />


    <!-- App Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="resources/assets/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="resources/assets/images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="resources/assets/images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="resources/assets/images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="resources/assets/images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="resources/assets/images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="resources/assets/images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="resources/assets/images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="resources/assets/images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="resources/assets/images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="resources/assets/images/icons/android-icon-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="resources/assets/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="resources/assets/images/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">






    <!-- CORE CSS FRAMEWORK - START -->
    <link href="resources/assets/css/preloader.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="resources/modules/materialize/materialize.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="resources/modules/materialize/materialize.min.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="resources/modules/fonts/mdi/appicon/appicon.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="resources/modules/fonts/mdi/materialdesignicons.min.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="resources/modules/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen" />


    <!-- CORE CSS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->


    <link href="resources/assets/css/style.css" type="text/css" rel="stylesheet" media="screen" id="main-style" />
    <!-- CORE CSS TEMPLATE - END -->
    <!-- Styles -->
    <style>
        .card-alert button {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            border: medium none;
            color: #fff;
            font-size: 20px;
            position: absolute;
            right: 10px;
            top: 15px;
            color: inherit;
        }

        .card-alert a {
            color: inherit;
            font-weight: 500;
        }

        .card-alert a:hover {
            color: inherit;
            text-decoration: underline;
        }
    </style>
</head>

<body class="html" data-header="light" data-footer="light" data-header_align="app" data-menu_type="left" data-menu="light" data-menu_icons="on" data-footer_type="left" data-site_mode="light" data-footer_menu="show" data-footer_menu_style="light">
    <div class="preloader-background">
        <div class="preloader-wrapper">
            <div id="preloader"></div>
        </div>
    </div>

    <!-- START navigation -->
    <nav class="fixedtop topbar navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" class="brand-logo brand-logo-title">Login</a>

            <a id="logo-container" href="{{url('/')}}" class="brand-logo"><img src="resources/assets/images/logo.png"></a>

            <a href="" data-target="" class="waves-effect waves-circle navicon back-button htmlmode show-on-large "><i class="mdi mdi-chevron-left" data-page=""></i></a>
            <a href="#" data-target="" class="waves-effect waves-circle navicon right nav-site-mode show-on-large"><i class="mdi mdi-invert-colors mdi-transition1"></i></a>
            <!-- <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->
        </div>
    </nav>

    <!-- END navigation -->



    <!-- SIDEBAR - START -->

    <!-- MAIN MENU - START -->



    <!-- MAIN MENU - END -->



    <!--  SIDEBAR - END -->
    <!-- SIDEBAR - START -->

    <!-- MAIN MENU - START -->



    <!-- MAIN MENU - END -->



    <!--  SIDEBAR - END -->
    <div class="content-area">
        <div class="container">
            <div class="section">

                <br><br>
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(session()->get('success'))

                <div class="card-alert card green lighten-5">
                    <div class="card-content green-text">
                        {{ session()->get('success') }}
                    </div>
                    <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif

                @if(session()->get('error'))
                <div class="card-alert card red lighten-5">
                    <div class="card-content red-text">
                        {{ session()->get('error') }}
                    </div>
                    <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif
                <h6 class="pagetitle">GET STARTED</h6>
                <div class="input-field col s12 ">
                    <form method="POST" action="user-login">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Enter Your Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <input id="password" type="hidden" class="form-control" name="password" value="123456" required autocomplete="email" autofocus>
                                <span class="helper-text" data-error="Incorrect Email" data-success="Correct Email" style="color:#000;">We will send you a verification link</span>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="center col-md-6 offset-md-4">

                                <button type="submit" class="btn-full waves-effect waves-light red darken-1 tooltipped col s2">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>







    <!--.content-area-->


    <script src="resources/assets/js/pwa.js"></script>

    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->
    <script src="resources/modules/jquery/jquery-2.2.4.min.js"></script>
    <script src="resources/modules/materialize/materialize.js"></script>
    <script src="resources/modules/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="resources/assets/js/variables.js"></script>
    <!-- CORE JS FRAMEWORK - END -->

    <script src="resources/assets/js/common.js"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


    <!-- CORE TEMPLATE JS - START -->
    <script src="resources/modules/app/init.js"></script>
    <script src="resources/modules/app/settings.js"></script>

    <script src="resources/modules/app/scripts.js"></script>

    <!-- END CORE TEMPLATE JS - END -->


    <script src="resources/assets/js/preloader.js"></script>

    <script>
        $(document).ready(function() {
            $('.card-alert > button').on('click', function() {
                $(this).closest('div.card-alert').fadeOut('slow');
            })
        })
    </script>

</body>

</html>