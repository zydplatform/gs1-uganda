<!DOCTYPE html>
<html lang="en" class="js-focus-visible">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Kiganda Ivan">
    <meta name="keywords" content="web application for barcodes using mobile first approach">
    <meta name="description" content="GS1 Uganda website">
	<title>GS1 Uganda</title>
	<link rel="icon" href="images/newlogo1.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/style.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="./assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/fontawesome.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="assets/js-slider/js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
	<!-- video player -->
	<link href="https://vjs.zencdn.net/7.8.3/video-js.css" rel="stylesheet" />
  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  <!-- polygonal background -->
<!--   <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="assets/src/polygonizr.min.js"></script>
  <style>

    #site-landing {
      position: relative;
      height: 770px;
      width: 100%;
      background-color: rgb(30, 30, 30);
    }
  </style> -->
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /*jssor slider bullet skin 132 css*/
        .jssorb132 {position:absolute;}
        .jssorb132 .i {position:absolute;cursor:pointer;}
        .jssorb132 .i .b {fill:#fff;fill-opacity:0.8;stroke:#000;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.7;}
        .jssorb132 .i:hover .b {fill:#000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:0.8;}
        .jssorb132 .iav .b {fill:#000;stroke:#fff;stroke-width:2400;fill-opacity:0.8;stroke-opacity:1;}
        .jssorb132 .i.idn {opacity:0.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
        <defs>
            <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <radialGradient id="jssor_1_grd_2">
                <stop offset="0" stop-color="#fff"></stop>
                <stop offset="1" stop-color="#000"></stop>
            </radialGradient>
            <mask id="jssor_1_msk_3">
                <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
            </mask>
        </defs>
    </svg>
</head>
<body>

	<div class="header" style="padding-bottom: 10px;padding-top: 15px;">
		<div class="jumbotron" style="padding-bottom: 10px;padding-top: 15px;">
			<div class="row">
				<div class="col-sm-4" ><span id="logo" style="float: right;"><img src="images/newlogo1.png" alt="gs1uganda-logo" style="width: 150px;height: 120px;"></span></div>
				<div class="col-sm-4"><h4>Welcome to  GS1 Uganda</h4>
				<p>The Global Language of Business</p></div>
				<div class="col-sm-4">		
					<a href="views/signup.php"><h6 style="color: #0090bf">Register With Us</h6>	</a>		
					<form action="" method="POST" class="inline-form">
						<div class="input-group mb-3">
  							<div class="input-group-prepend">
  								<!-- <span class="fa fa-search"></span> -->
  							</div>

  							<input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
  							<span class="input-group-text" id="basic-addon1" style="color: #ff5721;background-color: white;"><i class="fa fa-angle-right"></i></span>
  					</form>
  							<button id="login"><i class="fa fa-user"></i> <a  href="views/login.php" style="text-decoration: none;color: white;"> Membership Login</a></button>
				</div>
						
			</div>
		</div>
	</div>
	<nav class="navbar sticky-top navbar-expand-lg navbar-light ">
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="nav nav-tabs">
  			<li class="nav-item">
    			<a class="nav-link active" href="index.php">Home</a>
 			</li>
  			<li class="nav-item dropdown">
    			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="aboutus.php" role="button" aria-haspopup="true" aria-expanded="false">About us</a>
    			<div class="dropdown-menu">
      				<a class="dropdown-item" href="aboutus.php">What we do </a>
      				<a class="dropdown-item" href="aboutus.php">Start Here</a>
      				<a class="dropdown-item" href="aboutus.php">GS1 Uganda Council</a>
      				<a class="dropdown-item" href="aboutus.php">Legal</a>
      				<div class="dropdown-divider"></div>
      				<a class="dropdown-item" href="aboutus.php">License And Registration fees</a>
      				<a class="dropdown-item" href="aboutus.php">Why You should register</a>
    			</div>
  			</li>
   			<li class="nav-item dropdown">
    			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="ourservices.php" role="button" aria-haspopup="true" aria-expanded="false">Our Services</a>
    			<div class="dropdown-menu">
      				<a class="dropdown-item" href="ourservices.php">Training Programs </a>
      				<a class="dropdown-item" href="ourservices.php">Get Barcodes</a>
      				<a class="dropdown-item" href="ourservices.php">Data Syncronization Platform</a>
      				<div class="dropdown-divider"></div>
      				<a class="dropdown-item" href="ourservices.php">Barcode Verification Service</a>
      				<a class="dropdown-item" href="ourservices.php">Barcode Costs</a>
      				<a class="dropdown-item" href="ourservices.php">Item Measurement Service</a>
    			</div>
  			</li>
   			<li class="nav-item dropdown">
    			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="resources.php" role="button" aria-haspopup="true" aria-expanded="false">Resources</a>
    			<div class="dropdown-menu">
      				<a class="dropdown-item" href="resources.php">Standards & Guidelines</a>
      				<a class="dropdown-item" href="resources.php">Publications</a>
      				<a class="dropdown-item" href="resources.php">Terms & Conditions</a>
      				<div class="dropdown-divider"></div>
      				<a class="dropdown-item" href="resources.php">Glossary</a>
      				<a class="dropdown-item" href="resources.php">Technical Desk</a>
      				<a class="dropdown-item" href="resources.php">Customer Support</a>
    			</div>
  			</li>
   			<li class="nav-item dropdown">
    			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="tools.php" role="button" aria-haspopup="true" aria-expanded="false">GS1 Tools</a>
    			<div class="dropdown-menu">
      				<a class="dropdown-item" href="tools.php">Check Digital Calculator</a>
      				<a class="dropdown-item" href="tools.php">GTIN Management Decision Tool</a>
      				<a class="dropdown-item" href="tools.php">GS1 Company Database (GEPIR)</a>
              <a class="dropdown-item" href="tools.php">EPC Item Readiness Program</a>
              <a class="dropdown-item" href="tools.php">EPC Encoder/Decoder</a>
              <a class="dropdown-item" href="tools.php">GS1 Global Attribute Explorer</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="#"></a>
 			 </li>
  			<li class="nav-item">
    			<a class="nav-link disabled" href="contactform.php">Contact Us</a>
  			</li>
		</ul>
	</div>
	</nav>
	<div class="container-fluid">
		<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/eight.jpg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
            <div style="background-color:#d3890e;">
                <img data-u="image" style="opacity:0.8;" data-src="assets/js-slider/img/pb-beer-1513436-1600.jpg" />
                <div data-ts="flat" data-p="275" data-po="40% 50%" style="left:150px;top:40px;width:800px;height:300px;position:absolute;">
                    <div data-to="50% 50%" data-t="0" style="left:50px;top:520px;width:400px;height:100px;position:absolute;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">GS1 Uganda Barcodes </div>
                    <div data-to="50% 50%" data-t="1" style="left:50px;top:540px;width:400px;height:100px;position:absolute;opacity:0.5;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">GS1 Uganda Barcodes</div>
                    <div data-to="50% 50%" data-t="2" style="left:50px;top:560px;width:400px;height:100px;position:absolute;opacity:0.25;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">GS1 Uganda Barcodes</div>
                    <div data-to="50% 50%" data-t="3" style="left:50px;top:580px;width:400px;height:100px;position:absolute;opacity:0.125;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">GS1 Uganda Barcodes</div>
                    <div data-to="50% 50%" data-t="4" style="left:50px;top:600px;width:400px;height:100px;position:absolute;opacity:0.06;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">GS1 Uganda Barcodes</div>
                    <div data-to="50% 50%" data-t="5" style="left:50px;top:710px;width:700px;height:100px;position:absolute;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">GS1 Uganda Barcodes</div>
                </div>
            </div>
            <div>
                <!-- <img data-u="image" data-src="assets/js-slider/img/px-apartment-chairs-contemporary-2015560-1600.jpg" /> -->
                <img data-u="image" data-src="images/five.jpg" />
                <div data-ts="flat" data-p="540" data-po="40% 50%" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="6" style="left:350px;top:360px;width:900px;height:500px;position:absolute;">
                        <svg viewbox="0 0 800 60" data-to="50% 50%" width="800" height="60" data-t="7" style="left:0px;top:-70px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:700;letter-spacing:0.05em;overflow:visible;">
                            <text fill="#454447" stroke="#ff9500" stroke-width="2" text-anchor="middle" x="400" y="60">REGISTER YOUR BRAND
                            </text>
                        </svg>
                        <div data-to="50% 50%" data-t="8" style="filter:url('#jssor_1_flt_1');left:200px;top:0px;width:600px;height:60px;position:absolute;opacity:1;color:#ff5721;/*#C49D8F*/font-family:Roboto Condensed, sans-serif;font-size:48px;line-height:1.2;letter-spacing:0.1em;text-align:center;">OWN YOUR PRODUCT</div>
                        <svg viewbox="0 0 800 100" width="800" height="100" data-t="9" style="left:40px;top:250px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:100px;font-weight:900;letter-spacing:0.5em;overflow:visible;">
                            <text fill="rgba(255,255,255,0.7)" stroke="#ff9500" text-anchor="middle" x="400" y="100">GET BARCODES
                            </text>
                        </svg>
                    </div>
                </div>
            </div>
            <div style="background-color:#000000;">
                <!-- <img data-u="image" style="opacity:0.8;" data-src="img/px-back-view-boats-couple-2612852-1600.jpg" /> -->
                <img data-u="image" style="opacity:0.8;" data-src="images/ten.jpg" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="400" data-tchd="jssor_1_msk_3" style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                        <g mask="url(#jssor_1_msk_3)">
                            <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20" d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10" style="position:absolute;overflow:visible;"></path>
                        </g>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11" style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">BUY UGANDA
                        </text>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12" style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">BUILD UGANDA
                        </text>
                    </svg>
                </div>
            </div>
            <div>
                <img data-u="image" data-src="images/nine.jpg" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <div data-to="50% 50%" data-t="13" style="left:100px;top:-20px;width:800px;height:200px;position:absolute;opacity:0;">
                        <div style="left:94px;top:35px;width:480px;height:90px;position:absolute;color:rgba(74,217,205,0.8);font-family:'Roboto Condensed',sans-serif;font-size:72px;line-height:1.2;">Internationally recognized</div>
                        <div style="left:307px;top:115px;width:400px;height:50px;position:absolute;color:rgba(74,217,205,0.8);font-family:'Roboto Condensed',sans-serif;font-size:42px;line-height:1.1;text-align:center;background-color:rgba(72,77,76,0.5);">Secure Barcodes</div>
                    </div>
                </div>
            </div>
            <div>
                <img data-u="image" data-src="images/oil.jpg" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0.5;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">Local Products<br />Access International Market</div>
                    <img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:157px;position:absolute;opacity:0.5;max-width:344px;" data-src="images/two.jpg" />
                    <img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:172px;height:131px;position:absolute;opacity:0;max-width:172px;" data-src="images/six.jpg" />
                </div>
            </div>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:12px;height:12px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>

    <!-- cards -->
    <div class="row align-items-start" style="margin-top: 15px;">
    <div class="col-sm-3">
      <div class="card" style="border: solid 1px; border-color: rgba(0,0,0,0.4); width: 80%;">
      	<div class="card-heaader" style="background-color: #0090bf;height: 10px;">
      	</div>
      	<div class="card-body">
      		<a href="#" style="text-decoration: none;"><span style="color: #0090bf;text-align: center; font-family: 'Gotham Narrow SSm A', 'Gotham SSm B', 'Verdana', sans-serif;">Get verified, certified and customised barcodes</span></a>
      	</div>
      </div>
    </div>
    <div class="col-sm-3">
            <div class="card" style="border: solid 1px; border-color: rgba(0,0,0,0.4); width: 80%;">
      	<div class="card-heaader" style="background-color: #00cf6f;height: 10px;">
      	</div>
      	<div class="card-body">
      		<a href="#" style="text-decoration: none;"><span style="color: #0090bf;text-align: center; font-family: 'Gotham Narrow SSm A', 'Gotham SSm B', 'Verdana', sans-serif;">Application Forms with standard guidelines</span></a>
      	</div>
      </div>
    </div>
    <div class="col-sm-3">
            <div class="card" style="border: solid 1px; border-color: rgba(0,0,0,0.4); width: 80%;">
      	<div class="card-heaader" style="background-color: #0090bf;height: 10px;">
      	</div>
      	<div class="card-body">
      		<a href="#" style="text-decoration: none;"><span style="color: #0090bf;text-align: center; font-family: 'Gotham Narrow SSm A', 'Gotham SSm B', 'Verdana', sans-serif;">Secure your products with Barcode verification</span></a>
      	</div>
      </div>
    </div>
        <div class="col-sm-3">
            <div class="card" style="border: solid 1px; border-color: rgba(0,0,0,0.4); width: 80%;">
      	<div class="card-heaader" style="background-color: #00cf6f;height: 10px;">
      	</div>
      	<div class="card-body">
      		<a href="#" style="text-decoration: none;"><span style="color: #0090bf;text-align: center; font-family: 'Gotham Narrow SSm A', 'Gotham SSm B', 'Verdana', sans-serif;">Industry sectors using GS1 standards</span></a>
      	</div>
      </div>
    </div>
  </div>

    <div class="row align-items-start" style="margin-top: 15px;">
    <div class="col-sm-4">
      <div class="card" style="border: solid 1px; border-color: rgba(0,0,0,0.4); width: 80%;">
      	<div class="card-heaader" style="background-color: #ff5721;height: 10px;">
      	</div>
      	<div class="card-body">
      		<a href="#" style=" align-items: center;text-decoration: none;"><span style="color: #0090bf;text-align: center; font-family: 'Gotham Narrow SSm A', 'Gotham SSm B', 'Verdana', sans-serif;">Who we are </span></a>
      		<div class="card-img"><img src="images/gs2.jpg" style="width: 100%;height: 200px;"><p>We are an organization offering globally aceptable numbers for Barcodes and RFID tags supporting supply chains. Whether SMEs or large corporates, our solutions are tailor made to cater for business needs of all sizes.</p></div>
      	</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="border: solid 1px; border-color: rgba(0,0,0,0.4); width: 80%;">
      	<div class="card-heaader" style="background-color: #ff5721;height: 10px;">
      	</div>
      	<div class="card-body">
      		<a href="#" style=" align-items: center;text-decoration: none;"><span style="color: #0090bf;text-align: center; font-family: 'Gotham Narrow SSm A', 'Gotham SSm B', 'Verdana', sans-serif;">National Impact on COVID 19</span></a>
      		<div class="card-img"><img src="images/covid.jpg" style="width: 100%;height: 200px;"><p>As we are standing together to fight against this <strong>Pandemic of Covid 19 </strong>, boost your sales with our affordable and secure barcodes. Build the client's trust with the use of authenticated barcodes made in Uganda. </p></div>
      	</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="border: solid 1px; border-color: rgba(0,0,0,0.4); width: 80%;">
      	<div class="card-heaader" style="background-color: #ff5721;height: 10px;">
      	</div>
      	<div class="card-body">
      		<a href="#" style=" align-items: center;text-decoration: none;"><span style="color: #0090bf;text-align: center; font-family: 'Gotham Narrow SSm A', 'Gotham SSm B', 'Verdana', sans-serif;">GS1 Global News</span></a>
      		<div class="card-img"><img src="images/gs1.png" style="width: 100%;height: 200px;"><p>Gs1 Uganda gives your products international standards. Your products are no more for a small market, <strong>embrace the world market and increase on your sales and productivity.</strong> </p></div>
      	</div>
      </div>
    </div>
  </div>
      <div class="row align-items-start" style="margin-top: 15px;">
    <div class="col-sm-8">
      <div class="card" style="border: solid 1px; border-color: rgba(0,0,0,0.4);">
      	<div class="card-heaader" style="background-color: #00cf6f;height: 10px;">
      	</div>
      	<div class="card-body">
      		<a href="#" style="text-decoration: none;"><span style="color: #0090bf;text-align: center; font-family: 'Gotham Narrow SSm A', 'Gotham SSm B', 'Verdana', sans-serif;">What is GS1 Global ?</span></a>
      		<video id="my-video" class="video-js"controls preload="auto" width="640" height="264" poster="images/four.jpg" data-setup="{}">
    		<source src="videos/gs1video.mp4" type="video/mp4" />
    		<source src="videos/gs1video.webm" type="video/webm" />
    		<p class="vjs-no-js">
      			To view this video please enable JavaScript, and consider upgrading to a
      			web browser that
      		<a href="https://videojs.com/html5-video-support/" target="_blank"
       		 >supports HTML5 video</a
      >
    </p>
  </video>

  <script src="https://vjs.zencdn.net/7.8.3/video.js"></script>
      	</div>
      </div>
    </div>

    <div class="col-sm-4">
            <div class="card" style="border: none;">
      	<div class="card-heaader" style="background-color: #00cf6f;height: 10px;">
      	</div>
      	<div class="card-body">
      		<a href="#" style="text-decoration: none;"><span style="color: #0090bf;text-align: center; font-family: 'Gotham Narrow SSm A', 'Gotham SSm B', 'Verdana', sans-serif;">Tools And Apps :</span></a>
      		<ul class="list-group">
      			<li class="list-group-item"><a href="#">Check Digital Calculator</a></li>
      			<li class="list-group-item"><a href="#">Barcode Estimator</a></li>
      			<li class="list-group-item"><a href="#">GTIN Management Decision Tool</a></li>
      			<li class="list-group-item"><a href="#">GS1 Company Database (GEPIR)</a></li>
      			<li class="list-group-item"><a href="#">EPC Item Readiness Program</a></li>
      			<li class="list-group-item"><a href="#">EPC Encoder/Decoder</a></li>
      			<li class="list-group-item"><a href="#">GS1 Global Attribute Explorer</a></li>
      		</ul>
      	</div>
      </div>
    </div>
  </div>
  

<!-- 
  <div class="row" style="height: 770px;">
     <div id="site-landing">
     </div>
  <script>
    let $sitelading = $('#site-landing');
    $sitelading.polygonizr();

    // Update size.
    $(window).resize(function () {
      $sitelading.polygonizr("stop");
      $sitelading.polygonizr({
        canvasHeight: $(this).height(),
        canvasWidth: $(this).width()
      });

      $sitelading.polygonizr("refresh");
    });
  </script>
  </div> -->
  <div class="footer" style="bottom:auto; position: relative;text-align: center;" >
    <div class="row">
      <div class="col-sm-3">
        <p style="color: #ff5721;">QUICK LINKS</p>
        <ul style="list-style: none;">
          <li><a href="views/login.php">Get Barcodes</a></li>
          <li><a href="resources.php">Resources</a></li>
          <li><a href="tools.php">Tools</a></li>
          <li><a href="views/signup.php">Become a Member</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
                <p style="color: #ff5721;">FOLLOW US ON </p>
        <ul style="list-style: none;">
          <li><a href=""><i class="fa fa-envelop"></i> info@gs1uganda.ug</a></li>
          <li><a href=""><i class="fa fa-facebook"></i>gs1uganda</a></li>
          <li><a href=""><i class="fa fa-phone"></i> Tel : 098-764-5367</a></li>
          <li><a href=""><i class="fa fa-fax"></i>Fax : 0987-908-876</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
                <p style="color: #ff5721;">PARTNERS</p>
        <ul style="list-style: none;">
          <li><a href="">UNBS</a></li>
          <li><a href="">Planet Systems</a></li>
          <li><a href="">Ministry of Trade</a></li>
          <li><a href="">NITA</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
                <p style="color: #ff5721;">HELP</p>
        <ul style="list-style: none;">
          <li><a href="contactform.php">FAQ</a></li>
          <li><a href="contactform.php">Join Our Mailing List</a></li>
          <li><a href="contactform.php">Education & Training</a></li>
          <li><a href="contactform.php">Enquiries</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <div>
    
<div class="ult-wrapper wrapper " id="wrapper-18">
<div class="ult-container  container_12 " id="container-18">

    <div class="ult-column grid_8 " id="col-18-1">
      <div class="colwrapper"><div class="widget widget_text inner-container">      <div class="textwidget"><div class="footer_bottom">
     <span>GS1 Uganda All Copyrights reserved &copy;2020</span> 
 <span class="first_span" ><a href="#" target="_blank" rel="noopener noreferrer">Website Disclaimer</a></span> <b>|</b>
      <span class="first_span" ><a href="#">Privacy Policy</a></span> 
</div>
</div>
    </div></div>
    </div>
    <div class="ult-column grid_4 " id="col-18-2">
      <div class="colwrapper">&nbsp;</div>
    </div>
    </div>
</div>
</div>
    </div>
  </div>
  </div>
	<script type="text/javascript">jssor_1_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="./assets/app.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
</body>
</html>