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

    <!-- START navigation -->
    <nav class="fixedtop topbar navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" class="brand-logo brand-logo-title">Calculator</a>
           
            <a id="logo-container" href="{{url('/')}}" class="brand-logo"><img src="resources/assets/images/logo.png"></a>
            
            <a href="" data-target="" class="waves-effect waves-circle navicon back-button htmlmode show-on-large "><i class="mdi mdi-chevron-left" data-page=""></i></a>
            <a href="#" data-target="" class="waves-effect waves-circle navicon right nav-site-mode show-on-large"><i class="mdi mdi-invert-colors mdi-transition1"></i></a>
            <!-- <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->
        </div>
    </nav>

    <!-- END navigation -->


    <ul id="slide-settings" class="sidenav sidesettings ">
        <li class="menulinks">
            <ul class="collapsible">
                <!-- Menu Settings Start-->

                <li class="lvl1  site_mode">
                    <div class="waves-effect appsettings active" data-type="site_mode" data-value="light">
                        <a href="#!">
                            <i class="mdi mdi-checkbox-intermediate"></i>
                            <span class="title">Light Mode</span> </a>
                    </div>
                </li>
                <li class="lvl1  site_mode">
                    <div class="waves-effect appsettings " data-type="site_mode" data-value="dark">
                        <a href="#!">
                            <i class="mdi mdi-checkbox-blank-outline"></i>
                            <span class="title">Dark Mode</span> </a>
                    </div>
                </li>
                <li class="sep-wrap">
                    <div class="divider"></div>
                </li>
                <li class="sh-wrap">
                    <div class="subheader">Header Style</div>
                </li>
            </ul>
        </li>
    </ul>
    <ul id="slide-settings" class="sidenav sidesettings ">
        <li class="menulinks">
            <ul class="collapsible">
                <!-- Menu Settings Start-->

                <li class="lvl1  site_mode">
                    <div class="waves-effect appsettings active" data-type="site_mode" data-value="light">
                        <a href="#!">
                            <i class="mdi mdi-checkbox-intermediate"></i>
                            <span class="title">Light Mode</span> </a>
                    </div>
                </li>
                <li class="lvl1  site_mode">
                    <div class="waves-effect appsettings " data-type="site_mode" data-value="dark">
                        <a href="#!">
                            <i class="mdi mdi-checkbox-blank-outline"></i>
                            <span class="title">Dark Mode</span> </a>
                    </div>
                </li>
                <li class="sep-wrap">
                    <div class="divider"></div>
                </li>
                <li class="sh-wrap">
                    <div class="subheader">Header Style</div>
                </li>
            </ul>
        </li>
    </ul>

    <div class="content-area">
        <div class="container">
            <div class="section">
                <h6 class="pagetitle">Enter your values:</h6>
                <form id="calculator" name="calculator" method="POST" onsubmit="CalculateWeight(); return false;" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col s6">Select Shape:</div>
                        <div class="col s6">
                            <select name="shape" id="shape" onchange="ChangeLabel();ClearFields(this.value);" data-gtm-form-interact-field-id="0">
                                <option value="Flat/Rectangle" selected="selected">Flat/Rectangle</option>
                                <option value="Round">Round</option>
                                <option value="Square">Square</option>
                                <option value="Equal Angle">Equal Angle</option>
                                <option value="Hexagonal">Hexagonal</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <input name="width" type="number" step="any" id="width" value="0" size="6" maxlength="6" onblur="CalculateWeight()" data-gtm-form-interact-field-id="1">
                            <label for="width" id="lbl1">Width</label>
                        </div>
                        <div class="col s6">
                            <select name="unitsw" id="unitsw" onchange="CalculateWeight()">
                                <option value="in" selected="selected">in</option>
                                <option value="mm">mm</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" id="row_depth">
                        <div class="col s6">
                            <input name="depth" type="number" step="any" id="depth" value="0" size="6" maxlength="6" onblur="CalculateWeight()">
                            <label for="depth" id="lbl2">Depth</label>
                        </div>
                        <div class="col s6">
                            <select name="unitsd" id="unitsd" onchange="CalculateWeight()">
                                <option value="in" selected="selected">in</option>
                                <option value="mm">mm</option>
                               
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <input name="length" type="number" step="any" id="length" value="0" size="6" maxlength="6" onblur="CalculateWeight()" data-gtm-form-interact-field-id="3">
                            <label for="length" id="lbl3">Length </label>
                        </div>
                        <div class="col s6">
                            <select name="unitsl" id="unitsl" onchange="CalculateWeight()" data-gtm-form-interact-field-id="2">
                                <option value="in" selected="selected">in</option>
                                <option value="mm">mm</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s6">
                            <input type="button" name="calc" id="calc" value="Calculate" onclick="CalculateWeight()">
                        </div>
                        <div class="col s6">
                            <input type="button" name="clear" id="clear" value="Clear" onclick="ClearFields()">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <strong>Calculated Weight: (kg)</strong>
                        </div>
                        <div class="col s6">
                            <p class="result">
                                <span id="wkg">
                                    <input type="text" maxlength="8" name="result2" size="10" spellcheck="false" data-ms-editor="true">
                                </span> kg
                            </p>
                        </div>
                    </div>
                </form>
                <br><br>

            </div>
        </div>





    </div><!--.content-area-->

    <script src="resources/assets/js/common.js"></script>
    @include('footer')
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
</body>

</html>