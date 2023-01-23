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
    <nav class="fixedtop topbar navigation" style="text-align:center;">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.html" class=" brand-logo logo-margin "><img src="resources/assets/images/logo.png"></a>
        </div>
    </nav>
    <nav class="fixedtop topbar navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" class=" brand-logo ">Calculator</a>

            <a href="#" data-target="" class="waves-effect waves-circle navicon back-button htmlmode show-on-large "><i class="mdi mdi-chevron-left" data-page=""></i></a>

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

            <div id="container">



                <br><br>
                <div id="maintext">
                    <div id="leftcol">
                        <!-- InstanceBeginEditable name="LeftCol" -->
                        <h1>Steel Weight Calculator</h1>
                        <div class="pricing">
                            <form id="calculator" name="calculator" method="post" action="https://www.steelexpress.co.uk/steel-weight-calculator.html" data-gtm-form-interact-id="0">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr id="noreqiedie">
                                            <td width="13%">Material</td>
                                            <td width="87%"><select name="material" id="material" onchange="calculate()" data-gtm-form-interact-field-id="4">
                                                    <option value="0">Mild Steel</option>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Form</td>
                                            <td><select name="shape" id="shape" onchange="calculate()" data-gtm-form-interact-field-id="0">
                                                    <option value="0">round bar</option>
                                                    <option value="1">Square bar</option>
                                                    <option value="2" selected="selected">Rectangular bar</option>
                                                    <option value="2">Sheet/plate</option>
                                                    <option value="3">Hex bar</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td id="wd">Width</td>
                                            <td><input name="width" type="text" id="width" value="0" size="6" maxlength="6" onblur="calculate()" data-gtm-form-interact-field-id="1"> <select name="unitsw" id="unitsw" onchange="calculate()">
                                                    <option value="mm">mm</option>
                                                    <option value="cm">cm</option>
                                                    <option value="m">m</option>
                                                    <option value="in">in</option>
                                                    <option value="ft">ft</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td id="dp">Depth</td>
                                            <td><input name="depth" type="text" id="depth" value="0" size="6" maxlength="6" onblur="calculate()" disabled=""> <select name="unitsd" id="unitsd" onchange="calculate()" disabled="">
                                                    <option value="mm">mm</option>
                                                    <option value="cm">cm</option>
                                                    <option value="m">m</option>
                                                    <option value="in">in</option>
                                                    <option value="ft">ft</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td id="ln">Length</td>
                                            <td><input name="length" type="text" id="length" value="0" size="6" maxlength="6" onblur="calculate()" data-gtm-form-interact-field-id="3"> <select name="unitsl" id="unitsl" onchange="calculate()" data-gtm-form-interact-field-id="2">
                                                    <option value="mm">mm</option>
                                                    <option value="cm">cm</option>
                                                    <option value="m">m</option>
                                                    <option value="in">in</option>
                                                    <option value="ft">ft</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td><input type="button" name="calc" id="calc" value="Calculate" onclick="calculate()"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Weight (kg)</strong></td>
                                            <td>
                                                <p class="result"><span id="wkg">0.20</span> kg</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Weight (lb)</strong></td>
                                            <td>
                                                <p class="result">
                                                    <span id="wlb">0.43</span> lb
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>&nbsp; </p>
                            </form>




                        </div>
                        <p>&nbsp;</p>
                        <!-- InstanceEndEditable -->
                    </div>

                    <div id="fullwidthcol">
                        <!-- InstanceBeginEditable name="WideCol" -->
                        <p>&nbsp;</p>
                        <!-- InstanceEndEditable -->
                    </div>
                </div>


                <script type="text/javascript">
                    _linkedin_partner_id = "3580596";
                    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
                    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
                </script>

                <script type="text/javascript">
                    (function(l) {
                        if (!l) {
                            window.lintrk = function(a, b) {
                                window.lintrk.q.push([a, b])
                            };
                            window.lintrk.q = []
                        }
                        var s = document.getElementsByTagName("script")[0];
                        var b = document.createElement("script");
                        b.type = "text/javascript";
                        b.async = true;
                        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
                        s.parentNode.insertBefore(b, s);
                    })(window.lintrk);
                </script>

                <noscript>
                    <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3580596&fmt=gif" />
                </noscript>

            </div>
        </div><!--.content-area-->
    </div>

    @include('footer')

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script type="text/javascript">
        $(document).ready(function() {

            $(".carousel-fullscreen.carousel-slider").carousel({
                fullWidth: true,
                indicators: true,
            }).css("height", $(window).height());
            setTimeout(autoplay, 3500);

            function autoplay() {
                $(".carousel-fullscreen.carousel-slider").carousel("next");
                setTimeout(autoplay, 3500);
            }

        });
    </script>
    <script src="resources/modules/fancybox/jquery.fancybox.min.js" type="text/javascript"></script>
    <script type="text/javaScript">
        $("[data-fancybox=images]").fancybox({
            buttons : [ 
                "slideShow",
                "share",
                "zoom",
                "fullScreen",
                "close",
                "thumbs"
            ],
            thumbs : {
                autoStart : false
            }
            });
    </script>

</body>

</html>