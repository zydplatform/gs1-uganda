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
  <style type="text/css">
    .container-fluid{
      align-items: center;
      margin-left: 20%;
      overflow-x: hidden;
      width: 70%;
    }
  </style>
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
    <style type="text/css">
      img{
        width: 100%;
        height: 300px;
      }
    </style>
</head>
<body>

  <div class="header" style="padding-bottom: 10px;padding-top: 15px;">
    <div class="jumbotron" style="padding-bottom: 10px;padding-top: 15px;">
      <div class="row">
        <div class="col-sm-4" ><span id="logo" style="float: right;"><img src="images/newlogo1.png" alt="gs1uganda-logo" style="width: 150px;height: 120px;"></span></div>
        <div class="col-sm-4"><h4>Welcome to  GS1 Uganda</h4>
        <p>The Global Language of Business</p></div>
        <div class="col-sm-4">    
          <a href="views/signup.php"><h6 style="color: #0090bf">Register With Us</h6> </a>    
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
    <div class="entry-content">
      <div class="vc_row wpb_row vc_row-fluid vc_custom_1475157852368"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element " >
    <div class="wpb_wrapper">
      <h1>Our Services</h1>
<p>GS1 provides a range of services that will enable a more efficient supply chain.</p>

    </div>
  </div>
</div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1475161477611 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1471422648116"><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element " >
    <div class="wpb_wrapper">
      <h3>Identify products, documents, physical locations and more and make sure the barcode scans!</h3>

    </div>
  </div>
<div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="class_modal wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element " >
    <div class="wpb_wrapper">
      <h4><a href="https://www.gs1za.org/get-a-barcode/">Providing Identification Keys </a></h4>
<hr />
<p>GS1 South Africa is the only legal provider of Identification Keys like Barcode Numbers (GTINs) and Global Location Numbers (GLNs).</p>

    </div>
  </div>
</div></div></div><div class="class_modal wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element " >
    <div class="wpb_wrapper">
      <h4><a href="https://www.gs1za.org/barcode-verification/">Barcode symbol verification </a></h4>
<hr />
<p>GS1 can make sure your bar code scans first time, every time – ensuring effective Point of Sale processing for all products sold to consumers</p>

    </div>
  </div>
</div></div></div><div class="class_modal wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element " >
    <div class="wpb_wrapper">
      <h4><a href="http://www.gs1.org/check-digit-calculator">A check digit calculator </a></h4>
<hr />
<p>can assist in ensuring that the last digit of a bar code number (the check digit) is correctly composed.</p>

    </div>
  </div>
</div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid support vc_custom_1475161510321"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1471422665483"><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element " >
    <div class="wpb_wrapper">
      <h3>Assist you in making the GS1 Standards work for you!</h3>

    </div>
  </div>
<div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="global one wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner"><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element " >
    <div class="wpb_wrapper">
      <h4><a href="https://www.gs1za.org/consultancy/">GS1 Standards implementation support </a></h4>
<hr />
<p>GS1 South Africa provides training and assistance to various companies and individuals in the practical implementation of the GS1 System. This will enable you to experience the power of the GS1 standards when properly used.</p>
<p>Assistance may include e.g. where to put the barcode on an item, how to use a Serial Shipping Container Code (SSCC), how to start using Electronic Data Interchange (EDI), what does it mean to trace food items from farm to fork, how to keep track of logistic units delivered to a customer, how to make sure that the patient will get the right medicine and much more.</p>

    </div>
  </div>
</div></div></div><div class="class_modal wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element " >
    <div class="wpb_wrapper">
      <h4><a href="https://www.gs1za.org/training/">Workshops and training </a></h4>
<hr />
<p>You could attend regular training sessions on barcoding and Data Synchronisation (DATAnet.za) or we could visit you! We could also do a workshop in accordance with your specific need.</p>

    </div>
  </div>
</div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid support vc_custom_1471422349737 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1471422665483"><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element " >
    <div class="wpb_wrapper">
      <h3>Ensure seamless product data flow between your trading partners!</h3>

    </div>
  </div>
<div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="global wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element " >
    <div class="wpb_wrapper">
      <h4><a href="https://www.gs1za.org/data-synchronisation-platform/">Global Product Data Synchronisation </a></h4>
<hr />
<p>Is provided between business partners, enabling them to synchronise product data stored in the local DATAnet.za system as the single source of trusted data. Data as required by the local R.429 labelling regulation and the EU Regulation 1169/2011 can also be captured in DATAnet.za.</p>

    </div>
  </div>
</div></div></div><div class="global wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element " >
    <div class="wpb_wrapper">
      <h4><a href="https://www.gs1za.org/data-controller-directory/">Data controllers </a></h4>
<hr />
<p>Are companies or individuals experienced with data loading and publishing, as well as data management on the GS1 DATAnet.za system. They are verified by GS1 and can assist you to get product data to retailers, via DATAnet.za, in a fast and efficient way.</p>

    </div>
  </div>
</div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid border-lef"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element  item-meas" >
    <div class="wpb_wrapper">
      <h4><a href="&quot;https://www.gs1za.org/item-measurement-service/">The Item Measurement Service </a></h4>
<hr />
<p>Provides for the physical verification of product data (measurements, weights and basic label) versus what were entered in the DATAnet.za system. This provides retailers with a “trusted” status flag against the verified data and they will normally use it without further verification. This service can be combined with the barcode symbol verification.</p>

    </div>
  </div>
</div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid support row_one vc_custom_1475161665665"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1471422665483"><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element " >
    <div class="wpb_wrapper">
      <h3>Who owns that barcode, GLN, SSCC!</h3>

    </div>
  </div>
<div class="vc_row wpb_row vc_inner vc_row-fluid border-lef"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element  item-meas" >
    <div class="wpb_wrapper">
      <h4><a href="https://www.gs1za.org/gepir/">Use GEPIR </a></h4>
<hr />
<p>The GS1 Global Electronic Party Information Registry, to find out who is the legal owner of a barcode, a Global Location Number (GLN), a Serial Shipping Container Code (SSCC), etc.</p>

    </div>
  </div>
</div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>
    </div>
        <div class="clearfix"></div>
  </article>
  <div class="clearfix"></div><div style="clear:both"></div>  </div>
  </div></div>
    </div>
    </div>
</div>
</div>
</div>
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