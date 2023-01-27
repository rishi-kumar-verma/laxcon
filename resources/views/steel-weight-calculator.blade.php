<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('head')
<!-- BEGIN BODY -->

<body class="html" data-header="light" data-footer="light" data-header_align="app" data-menu_type="left" data-menu="light" data-menu_icons="on" data-footer_type="left" data-site_mode="light" data-footer_menu="show" data-footer_menu_style="light">
    
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



            <div id="container">



                <br><br>
                <div id="maintext">
                    <br>
                    <nav class="fixedtop topbar navigation" style="text-align:center;">
                        <div class="nav-wrapper container">
                            <a id="logo-container" href="index.html" class=" brand-logo logo-margin "><img src="resources/assets/images/logo.png"></a>
                        </div>
                    </nav>

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
    </div>

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
</body>

</html>