<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
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

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<!-- BEGIN BODY -->

<body class="html" data-header="light" data-footer="light" data-header_align="app" data-menu_type="left" data-menu="light" data-menu_icons="on" data-footer_type="left" data-site_mode="light" data-footer_menu="show" data-footer_menu_style="light">
    <div class="preloader-background">
        <div class="preloader-wrapper">
            <div id="preloader"></div>
        </div>
    </div>
    <nav class="fixedtop topbar navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.html" class=" brand-logo "><img src="resources/assets/images/logo.png"></a>
        </div>
    </nav>

    <!-- END navigation -->
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <!--  SIDEBAR - END -->
        <div class="content-area">

            <div class="container  is-pagetitle">
                <div class="section">
                    <h6 class="pagetitle">Send a Query</h6>

                    <div class="input-field col s12">
                        <input id="first_name1" type="text" class="validate">
                        <label for="first_name1">First </label>
                    </div>

                    <div class="input-field col s12">
                        <input id="phoneno" type="text" class="validate">
                        <label for="phoneno">Phone no </label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email3" type="email" class="validate">
                        <label for="email3">Email</label>
                        <span class="helper-text" data-error="Incorrect Email" data-success="Correct Email">Please enter your email here</span>
                    </div>

                    <div class="input-field col s12">
                        <input id="country" type="text" class="validate">
                        <label for="country">Country</label>
                    </div>
                    <div class="section ui-select">
                        <div class="input-field col s12">
                            <select multiple>
                                <option value="1" selected>Select</option>
                                <option value="1">Forging Quality Ingots</option>
                                <option value="2">Continuous Cast Blooms / Billets</option>
                                <option value="3">Round Bars (hot rolled)</option>
                                <option value="4">Round Corner Square (hot rolled)</option>
                                <option value="5">Flat Bars (HRAP & Cold Drawn)</option>
                                <option value="6">Equal & Un-Equal Angles Bars</option>
                                <option value="7">Bright Bars (round / hex / square)</option>
                                <option value="8">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-field col s12">
                        <textarea id="textarea-normal" class="materialize-textarea validate"></textarea>
                        <label for="textarea-normal">Text area</label>
                    </div>
                    <div class="center">
                        <a href="sendaquery.html"><button class="btn-full waves-effect waves-light red darken-1 tooltipped col s2">Send

                            </button></a>
                    </div>
                </div>
                <br><br>


            </div>
        </div><!--.content-area-->
    </div>

    @include('footer')

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

</body>

</html>