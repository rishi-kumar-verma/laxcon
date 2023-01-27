
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- InstanceBeginEditable name="docTitle" -->
    <title>Steel Weight Calculator</title>
    <!-- InstanceEndEditable -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @charset "utf-8";
        @import url(https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i);
        body {
            background-color: #fff;
            font-family: 'Noto Sans', 'Trebuchet MS', Geneva, Arial, Helvetica, SunSans-Regular, sans-serif;
            color: #1c1c1c;
            margin: 0;
            padding: 0
        }
        
        #container {
            width: 970px;
            margin-top: 0;
            margin-right: auto;
            margin-bottom: 0;
            margin-left: auto;
            font-size: 11pt;
            line-height: 1.6em
        }
        
        #topmenu {
            background-color: #1c1c1c;
            float: right;
            font-size: 9pt;
            padding: 5px 10px
        }
        
        #topmenu p {
            color: #666;
            text-align: right;
            margin: 0;
            padding-top: 10px;
            padding-right: 20px;
            padding-bottom: 10px;
            padding-left: 0
        }
        
        #maintext {
            background-color: #1c1c1c;
            padding-bottom: 10px;
            margin-top: 10px;
        }
        
        a:link,
        a:visited {
            color: #2e5a8b;
            text-decoration: none
        }
        
        a:hover,
        a:active {
            color: #000;
            text-decoration: underline
        }
        
        h1,
        h2,
        h3 {
            color: #e53935;
            font-weight: 400
        }
        
        h1 {
            line-height: 1em
        }
        
        #fullwidthcol {
            padding: 0;
            margin-top: 5px;
            margin-right: 15px;
            margin-bottom: 5px;
            margin-left: 25px;
            clear: both
        }
        
        #regionalcol {
            padding: 5px 10px;
            margin-top: 5px;
            margin-right: 15px;
            margin-bottom: 5px;
            margin-left: 25px;
            clear: both;
            background-color: #fff
        }
        
        #leftcol {
            padding: 0 10px;
            clear: left;
            float: left;
            width: 900px;
            margin-top: 20px;
            margin-right: 15px;
            margin-bottom: 5px;
            margin-left: 25px;
            background-color: #fff
        }
        
        #rightcol {
            padding: 0;
            float: left;
            width: 200px;
            margin-top: 5px;
            margin-right: 0;
            margin-bottom: 5px;
            margin-left: 10px
        }
        
        .rightnav h3 a {
            color: #fff
        }
        
        .rightnav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 100%
        }
        
        .rightnav ul li a {
            display: block;
            padding: 5px 0 5px 10px;
            background-color: #364861;
            color: #ccc;
            font-size: 10pt
        }
        
        .rightnav a:hover {
            text-decoration: none;
            color: #fff;
            background-color: #666;
            transition: background-color .3s
        }
        
        #footer {
            font-size: 12px;
            padding: 0;
            clear: both;
            width: 100%;
            margin-top: 5px;
            margin-right: 15px;
            margin-bottom: 5px;
            margin-left: 15px
        }
        
        .ncopy {
            font-size: .8em;
            line-height: 1.3em;
            color: #999;
            background-color: #2e353e;
            clear: both;
            margin: 0;
            padding-top: 5px;
            padding-right: 10px;
            padding-bottom: 5px;
            padding-left: 10px
        }
        
        .ncopy a {
            color: #999
        }
        
        .ncopy .fcell {
            margin: 5px;
            float: left;
            width: 165px
        }
        
        .ncopy .fcell h3 {
            color: #afafaf;
            font-size: 1.3em;
            font-weight: bold
        }
        
        .ncopy .fcell p {
            margin: 0;
            padding: 0
        }
        
        .stock-table {
            font-size: 90%;
            text-align: left;
            vertical-align: top;
            margin: 0;
            padding: 0;
            border-color: #ccc #fff #fff #ccc;
            border-style: solid;
            border-width: 1px;
            background-color: #fdfdfd
        }
        
        .stock-table td {
            border-bottom-width: 1px;
            border-bottom-style: solid;
            border-bottom-color: #ccc;
            border-right-width: 1px;
            border-right-style: solid;
            border-right-color: #ccc;
            padding: 0 10px
        }
        
        .stock-table tr:hover {
            background-color: #f5f9fd
        }
        
        .pricing table {
            font-size: 9pt;
            background-color: #fff;
            border-left-width: 1px;
            border-left-style: solid;
            border-left-color: #ccc;
            border-top-width: 1px;
            border-top-style: solid;
            border-top-color: #ccc
        }
        
        .pricing td {
            border-bottom-width: 1px;
            border-bottom-style: solid;
            border-bottom-color: #ccc;
            padding-left: 5px;
            border-right-width: 1px;
            border-right-style: solid;
            border-right-color: #ccc;
            border-top-width: 0;
            border-left-width: 0;
            border-top-style: solid;
            border-left-style: solid;
            border-top-color: #fff;
            border-left-color: #fff;
            padding-top: 1px;
            padding-right: 1px;
            padding-bottom: 1px;
            margin: 0
        }
        
        .pricing th {
            font-size: 8pt;
            font-weight: bold;
            color: #333;
            background-color: #eee;
            text-align: left;
            padding-left: 5px;
            border-right-width: 1px;
            border-right-style: solid;
            border-right-color: #ccc
        }
        
        .pricingc td {
            text-align: center
        }
        
        #searchbox {
            font-size: 8pt;
            border-color: #888;
            border-width: 1px;
            border-style: solid;
            color: #666
        }
        
        .result {
            font-size: 1.5em;
            font-weight: bold;
            color: #fff;
            background-color: #e53935;
            margin: 5px;
            padding: 5px;
            text-align: center;
            width: auto;
            border-radius: 5px
        }
        
        .hideme {
            display: none
        }
        
        .btn-style,
        .btn-style:link,
        .btn-style:visited {
            border: solid 0 #fff;
            font-size: 18px;
            color: #fff;
            padding: 7px 9px 8px 9px;
            background-color: #942e21;
            cursor: pointer;
            transition: background-color .3s
        }
        
        .btn-style:hover,
        .btn-style:active {
            background-color: #000;
            text-decoration: none
        }
        
        .wide {
            display: block;
            width: 100%;
            text-align: center;
            padding: 10px 0!important
        }
        
        .callout {
            background-color: #eee;
            padding: 1px 1px 10px 10px
        }
        
        .callout2 {
            background-color: #eee;
            padding: 1px 10px;
            margin: 2px
        }
        
        .col2 {
            width: 50%;
            float: left
        }
        
        .col3 {
            width: 33%;
            float: left
        }
        
        .col3-2 {
            width: 66%;
            float: left
        }
        
        .clearall {
            clear: both
        }
        
        .white {
            color: #fff
        }
        
        .whiteback {
            background-color: #fff;
            padding: 10px
        }
        
        .white a:link,
        .white a:visited {
            color: #fff;
            text-decoration: none
        }
        
        .white a:hover,
        .white a:active {
            color: #ccc;
            text-decoration: underline
        }
        
        .sticky_anchor a {
            right: 0;
            position: fixed;
            top: 60px;
            background: #942e21;
            padding: 20px;
            text-transform: uppercase;
            color: #fff;
            font-size: 16px;
            font-weight: 800;
            text-align: center;
            text-decoration: none!important
        }
        
        .sticky_anchor a:hover {
            background: #000!important
        }
        
        .sticky_anchor a span {
            padding-bottom: 10px!important;
            display: -webkit-inline-box
        }
        
        @media screen and (max-width:1100px) {
            .sticky_anchor {
                display: none!important
            }
        }
    </style>
    <style>
        #cssmenu,
        #cssmenu ul,
        #cssmenu ul li,
        #cssmenu ul li a,
        #cssmenu #menu-button {
            margin: 0;
            padding: 0;
            border: 0;
            list-style: none;
            line-height: 1;
            display: block;
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }
        
        #cssmenu:after,
        #cssmenu>ul:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0
        }
        
        #cssmenu #menu-button {
            display: none
        }
        
        #cssmenu {
            font-family: "Trebuchet MS", Geneva, Arial, Helvetica, SunSans-Regular, sans-serif;
            background: #2e353e;
            padding-left: 10px
        }
        
        #cssmenu>ul>li {
            float: left
        }
        
        #cssmenu.align-center>ul {
            font-size: 0;
            text-align: center
        }
        
        #cssmenu.align-center>ul>li {
            display: inline-block;
            float: none
        }
        
        #cssmenu.align-center ul ul {
            text-align: left
        }
        
        #cssmenu.align-right>ul>li {
            float: right
        }
        
        #cssmenu>ul>li>a {
            padding: 17px 15px;
            font-size: 15px;
            letter-spacing: 0;
            text-decoration: none;
            color: #ccc;
            font-weight: 400
        }
        
        #cssmenu>ul>li:hover>a {
            color: #fff
        }
        
        #cssmenu>ul>li.has-sub>a {
            padding-right: 25px
        }
        
        #cssmenu>ul>li.has-sub>a:after {
            position: absolute;
            top: 22px;
            right: 11px;
            width: 8px;
            height: 2px;
            display: block;
            background: #ddd;
            content: ''
        }
        
        #cssmenu>ul>li.has-sub>a:before {
            position: absolute;
            top: 19px;
            right: 14px;
            display: block;
            width: 2px;
            height: 8px;
            background: #ddd;
            content: '';
            -webkit-transition: all .25s ease;
            -moz-transition: all .25s ease;
            -ms-transition: all .25s ease;
            -o-transition: all .25s ease;
            transition: all .25s ease
        }
        
        #cssmenu>ul>li.has-sub:hover>a:before {
            top: 23px;
            height: 0
        }
        
        #cssmenu ul ul {
            position: absolute;
            left: -9999px
        }
        
        #cssmenu.align-right ul ul {
            text-align: right
        }
        
        #cssmenu ul ul li {
            height: 0;
            -webkit-transition: all .25s ease;
            -moz-transition: all .25s ease;
            -ms-transition: all .25s ease;
            -o-transition: all .25s ease;
            transition: all .25s ease
        }
        
        #cssmenu li:hover>ul {
            left: auto
        }
        
        #cssmenu.align-right li:hover>ul {
            left: auto;
            right: 0
        }
        
        #cssmenu li:hover>ul>li {
            height: 35px
        }
        
        #cssmenu ul ul ul {
            margin-left: 100%;
            top: 0
        }
        
        #cssmenu.align-right ul ul ul {
            margin-left: 0;
            margin-right: 100%
        }
        
        #cssmenu ul ul li a {
            border-bottom: 1px solid rgba(150, 150, 150, .15);
            padding: 11px 15px;
            width: 220px;
            font-size: 12px;
            text-decoration: none;
            color: #ddd;
            font-weight: 400;
            background: #2e353e
        }
        
        #cssmenu ul ul li:last-child>a,
        #cssmenu ul ul li.last-item>a {
            border-bottom: 0
        }
        
        #cssmenu ul ul li:hover>a,
        #cssmenu ul ul li a:hover {
            color: #fff;
            background: #666
        }
        
        #cssmenu ul ul li.has-sub>a:after {
            position: absolute;
            top: 16px;
            right: 11px;
            width: 8px;
            height: 2px;
            display: block;
            background: #ddd;
            content: ''
        }
        
        #cssmenu.align-right ul ul li.has-sub>a:after {
            right: auto;
            left: 11px
        }
        
        #cssmenu ul ul li.has-sub>a:before {
            position: absolute;
            top: 13px;
            right: 14px;
            display: block;
            width: 2px;
            height: 8px;
            background: #ddd;
            content: '';
            -webkit-transition: all .25s ease;
            -moz-transition: all .25s ease;
            -ms-transition: all .25s ease;
            -o-transition: all .25s ease;
            transition: all .25s ease
        }
        
        #cssmenu.align-right ul ul li.has-sub>a:before {
            right: auto;
            left: 14px
        }
        
        #cssmenu ul ul>li.has-sub:hover>a:before {
            top: 17px;
            height: 0
        }
        
        @media all and (max-width:1200px),
        only screen and (-webkit-min-device-pixel-ratio:2) and (max-width:1024px),
        only screen and (min--moz-device-pixel-ratio:2) and (max-width:1024px),
        only screen and (-o-min-device-pixel-ratio:2/1) and (max-width:1024px),
        only screen and (min-device-pixel-ratio:2) and (max-width:1024px),
        only screen and (min-resolution:192dpi) and (max-width:1024px),
        only screen and (min-resolution:2dppx) and (max-width:1024px) {
            #container {
                width: 975px
            }
            #leftcol {
                width: 740px;
                margin-right: 10px;
                margin-left: 15px
            }
            #rightcol {
                width: 170px;
                margin-left: 5px
            }
            #cssmenu>ul>li>a {
                padding: 17px 8px;
                font-size: 13px
            }
        }
        
        @media all and (max-width:975px),
        only screen and (-webkit-min-device-pixel-ratio:2) and (max-width:1024px),
        only screen and (min--moz-device-pixel-ratio:2) and (max-width:1024px),
        only screen and (-o-min-device-pixel-ratio:2/1) and (max-width:1024px),
        only screen and (min-device-pixel-ratio:2) and (max-width:1024px),
        only screen and (min-resolution:192dpi) and (max-width:1024px),
        only screen and (min-resolution:2dppx) and (max-width:1024px) {
            #container {
                width: 768px
            }
            #cssmenu {
                padding-left: 0
            }
            #cssmenu>ul>li>a {
                padding: 15px 5px;
                font-size: 11px;
                letter-spacing: 0
            }
            #cssmenu>ul>li.has-sub>a {
                padding-right: 18px
            }
            #leftcol {
                width: 560px;
                margin-right: 10px;
                margin-left: 15px
            }
            #rightcol {
                width: 145px;
                margin-left: 2px
            }
        }
        
        @media all and (max-width:768px),
        only screen and (-webkit-min-device-pixel-ratio:2) and (max-width:1024px),
        only screen and (min--moz-device-pixel-ratio:2) and (max-width:1024px),
        only screen and (-o-min-device-pixel-ratio:2/1) and (max-width:1024px),
        only screen and (min-device-pixel-ratio:2) and (max-width:1024px),
        only screen and (min-resolution:192dpi) and (max-width:1024px),
        only screen and (min-resolution:2dppx) and (max-width:1024px) {
            #container {
                width: 100%
            }
            #leftcol,
            #fullwidthcol {
                width: 96%;
                margin-right: 5px;
                margin-left: 5px
            }
            #rightcol {
                width: 100%;
                margin-left: 0;
                background-color: #f8f8f8
            }
            #topmenu {
                display: none
            }
            .ncopy .fcell {
                width: 45%
            }
            .col2,
            col3,
            col3-2 {
                width: 100%
            }
            #cssmenu {
                width: 100%
            }
            #cssmenu ul {
                width: 100%;
                display: none
            }
            #cssmenu.align-center>ul {
                text-align: left
            }
            #cssmenu ul li {
                width: 100%;
                border-top: 1px solid rgba(120, 120, 120, .2)
            }
            #cssmenu ul ul li,
            #cssmenu li:hover>ul>li {
                height: auto
            }
            #cssmenu ul li a,
            #cssmenu ul ul li a {
                width: 100%;
                border-bottom: 0
            }
            #cssmenu>ul>li {
                float: none
            }
            #cssmenu ul ul li a {
                padding-left: 25px
            }
            #cssmenu ul ul ul li a {
                padding-left: 35px
            }
            #cssmenu ul ul li a {
                color: #ddd;
                background: none
            }
            #cssmenu ul ul li:hover>a,
            #cssmenu ul ul li.active>a {
                color: #fff
            }
            #cssmenu ul ul,
            #cssmenu ul ul ul,
            #cssmenu.align-right ul ul {
                position: relative;
                left: 0;
                width: 100%;
                margin: 0;
                text-align: left
            }
            #cssmenu>ul>li.has-sub>a:after,
            #cssmenu>ul>li.has-sub>a:before,
            #cssmenu ul ul>li.has-sub>a:after,
            #cssmenu ul ul>li.has-sub>a:before {
                display: none
            }
            #cssmenu #menu-button {
                display: block;
                padding: 17px;
                color: #ddd;
                cursor: pointer;
                font-size: 12px;
                text-transform: uppercase;
                font-weight: 700
            }
            #cssmenu #menu-button:after {
                position: absolute;
                top: 22px;
                right: 17px;
                display: block;
                height: 4px;
                width: 20px;
                border-top: 2px solid #ddd;
                border-bottom: 2px solid #ddd;
                content: ''
            }
            #cssmenu #menu-button:before {
                position: absolute;
                top: 16px;
                right: 17px;
                display: block;
                height: 2px;
                width: 20px;
                background: #ddd;
                content: ''
            }
            #cssmenu #menu-button.menu-opened:after {
                top: 23px;
                border: 0;
                height: 2px;
                width: 15px;
                background: #fff;
                -webkit-transform: rotate(45deg);
                -moz-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                -o-transform: rotate(45deg);
                transform: rotate(45deg)
            }
            #cssmenu #menu-button.menu-opened:before {
                top: 23px;
                background: #fff;
                width: 15px;
                -webkit-transform: rotate(-45deg);
                -moz-transform: rotate(-45deg);
                -ms-transform: rotate(-45deg);
                -o-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            #cssmenu .submenu-button {
                position: absolute;
                z-index: 99;
                right: 0;
                top: 0;
                display: block;
                border-left: 1px solid rgba(120, 120, 120, .2);
                height: 46px;
                width: 46px;
                cursor: pointer
            }
            #cssmenu .submenu-button.submenu-opened {
                background: #262626
            }
            #cssmenu ul ul .submenu-button {
                height: 34px;
                width: 34px
            }
            #cssmenu .submenu-button:after {
                position: absolute;
                top: 22px;
                right: 19px;
                width: 8px;
                height: 2px;
                display: block;
                background: #ddd;
                content: ''
            }
            #cssmenu ul ul .submenu-button:after {
                top: 15px;
                right: 13px
            }
            #cssmenu .submenu-button.submenu-opened:after {
                background: #fff
            }
            #cssmenu .submenu-button:before {
                position: absolute;
                top: 19px;
                right: 22px;
                display: block;
                width: 2px;
                height: 8px;
                background: #ddd;
                content: ''
            }
            #cssmenu ul ul .submenu-button:before {
                top: 12px;
                right: 16px
            }
            #cssmenu .submenu-button.submenu-opened:before {
                display: none
            }
        }
        
        #searchbox {
            font-size: 8pt;
            border-color: #888;
            border-width: 1px;
            border-style: solid;
            color: #666
        }
        
        #noreqiedie {
            display: none;
        }
    </style>
    <script type="text/javascript" async="" src="./resources/Steel Weight Calculator_files/insight.min.js.download"></script>
    <script type="text/javascript" async="" src="./resources/Steel Weight Calculator_files/js"></script>
    <script type="text/javascript" async="" src="./resources/Steel Weight Calculator_files/analytics.js.download"></script>
    <script type="text/javascript" async="" src="./resources/Steel Weight Calculator_files/js(1)"></script>
    <script src="./resources/Steel Weight Calculator_files/lftracker_v1_YEgkB8lZjKM4ep3Z.js.download"></script>
    <script src="./resources/Steel Weight Calculator_files/jquery-latest.min.js.download" type="text/javascript"></script>

    <meta name="geo.placename" content="1 Showell Road, Wolverhampton, West Midlands WV10, UK">
    <meta name="geo.position" content="52.6043582;-2.1265896">
    <meta name="geo.region" content="GB-ENG">
    <meta name="ICBM" content="52.6043582, -2.1265896">
    <link href="https://www.steelexpress.co.uk/favicon.ico" rel="shortcut icon">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="./resources/Steel Weight Calculator_files/js(2)"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-7626587-1');
        gtag('config', 'AW-1064857571');
    </script>
    <script>
        (function() {
            window.ldfdr = window.ldfdr || {};
            (function(d, s, ss, fs) {
                fs = d.getElementsByTagName(s)[0];

                function ce(src) {
                    var cs = d.createElement(s);
                    cs.src = src;
                    setTimeout(function() {
                        fs.parentNode.insertBefore(cs, fs)
                    }, 1);
                }
                ce(ss);
            })(document, 'script', 'https://sc.lfeeder.com/lftracker_v1_YEgkB8lZjKM4ep3Z.js');
        })();
    </script>

    <!-- InstanceBeginEditable name="head" -->
    <meta name="description" content="The steel weight calculator allows you to calculate an estimate of the weight of different types of materials based on dimensions and shape.">
    <meta name="keywords" content="steel weight, weight calculator, steel density, steel weight calculator">
    <script type="text/javascript">
        var dens = 0;
        var metaldensity = [7850, 7200, 2700, 1430];
        var kgtolb = 2.20462;
        var intomm = 25.4;
        var w = 0;
        var d = 0;
        var l = 0;

        function calculate() {
            document.getElementById('wd').innerHTML = "Width"
            document.getElementById('dp').innerHTML = "Depth"
            w = calculator.width.value;
            d = calculator.depth.value;
            l = calculator.length.value;
            if (calculator.unitsw.value == "cm") {
                w *= 10
            } else if (calculator.unitsw.value == "m") {
                w *= 1000
            } else if (calculator.unitsw.value == "in") {
                w *= intomm
            } else if (calculator.unitsw.value == "ft") {
                w *= intomm * 12
            }
            if (calculator.unitsd.value == "cm") {
                d *= 10
            } else if (calculator.unitsd.value == "m") {
                d *= 1000
            } else if (calculator.unitsd.value == "in") {
                d *= intomm
            } else if (calculator.unitsd.value == "ft") {
                d *= intomm * 12
            }
            if (calculator.unitsl.value == "cm") {
                l *= 10
            } else if (calculator.unitsl.value == "m") {
                l *= 1000
            } else if (calculator.unitsl.value == "in") {
                l *= intomm
            } else if (calculator.unitsl.value == "ft") {
                l *= intomm * 12
            }
            if (calculator.shape.value == 2) {
                calculator.depth.disabled = false;
                calculator.unitsd.disabled = false;
                vol = w * d * l / 1e9;
            } else if (calculator.shape.value == 1) {
                calculator.depth.value = calculator.width.value;
                calculator.unitsd.value = calculator.unitsw.value;
                calculator.depth.disabled = true;
                calculator.unitsd.disabled = true;
                vol = w * d * l / 1e9;
            } else if (calculator.shape.value == 0) {
                calculator.depth.value = 0;
                calculator.unitsd.value = calculator.unitsw.value;
                document.getElementById('wd').innerHTML = "Diameter"
                document.getElementById('dp').innerHTML = " "
                calculator.depth.disabled = true;
                calculator.unitsd.disabled = true;
                vol = (l * Math.PI * Math.pow((w / 2), 2)) / 1e9;
            } else if (calculator.shape.value == 3) {
                calculator.depth.value = 0;
                calculator.unitsd.value = calculator.unitsw.value;
                document.getElementById('wd').innerHTML = "Width across flats"
                document.getElementById('dp').innerHTML = " "
                calculator.depth.disabled = true;
                calculator.unitsd.disabled = true;
                vol = (l * 1.732 * w * w / 2) / 1e9;
            }
            dens = metaldensity[calculator.material.value];
            document.getElementById('wkg').innerHTML = (vol * dens).toFixed(2);
            document.getElementById('wlb').innerHTML = (vol * dens * kgtolb).toFixed(2);
        }
    </script>

    <!-- InstanceEndEditable -->

    <meta http-equiv="origin-trial" content="A751Xsk4ZW3DVQ8WZng2Dk5s3YzAyqncTzgv+VaE6wavgTY0QHkDvUTET1o7HanhuJO8lgv1Vvc88Ij78W1FIAAAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjgwNjUyNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
    <meta http-equiv="origin-trial" content="A751Xsk4ZW3DVQ8WZng2Dk5s3YzAyqncTzgv+VaE6wavgTY0QHkDvUTET1o7HanhuJO8lgv1Vvc88Ij78W1FIAAAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjgwNjUyNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
    <script type="text/javascript" async="" src="./resources/Steel Weight Calculator_files/f.txt"></script>
    <script type="text/javascript" async="" src="./resources/Steel Weight Calculator_files/f(1).txt"></script>
    <script type="text/javascript" src="./resources/Steel Weight Calculator_files/208908.js.download"></script>
    <script type="text/javascript" src="./resources/Steel Weight Calculator_files/208908.js.download"></script>
    <noscript><img alt="" src="https://secure.east2pony.com/208908.png" style="display:none;"/></noscript>
</head>